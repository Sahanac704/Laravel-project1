<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $abouts = About::get();
       return view('admin.about.create',compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreAboutRequest $request)
    {
        About::create($request->validated());
        Alert::success('About Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */

    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

public function update(UpdateAboutRequest $request, About $about)
    {
       $about->update($request->validated());
       return redirect(route('admin.about.index'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
