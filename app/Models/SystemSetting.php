<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SystemSetting extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'phone_number',
        'email',
        'address',
        'map_url',
        'facebook_url',
        'logo',
        'thumbnail',
        'instagram_url',
        'twitter_url',
        'tiktok_url',
        'pinterest_url',
        'youtube_url',
    ];

    public function logo():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }

    public function thumbnail():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }


}
