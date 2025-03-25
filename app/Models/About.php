<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1',
        'title2',
        'image',
        'description',

    ];

    public function image():Attribute
    {
        return Attribute::make(
            get:fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set:fn($value) => $value ? $value -> store('About','public') : null,
        );
    }
}
