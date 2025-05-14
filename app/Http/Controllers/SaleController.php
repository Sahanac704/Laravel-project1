<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SaleController extends Controller
{
    public function sale(Request $request, Product $product)
    {
        $request->validate([
            'purchased_quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $purchasedQty = $request->purchased_quantity;

        if ($purchasedQty > $product->total_quantity) {
            Alert::error('Not enough stock available!');
            return back();
        }

        $product->total_quantity -= $purchasedQty;
        $product->save();

        $customerId = Auth::guard('customer')->user()->id;

        $sale = Sale::updateOrCreate(
            [
                'customer_id' => $customerId,
                'product_id' => $product->id,
            ],
            [
                'purchased_quantity' => $purchasedQty,
            ]
        );

        Alert::success('Product purchased successfully!');
        return back();
    }

}
