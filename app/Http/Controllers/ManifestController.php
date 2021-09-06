<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManifestController extends Controller
{
    public function manifest () {
        
        $icon1 = [
            "src" => "/android-chrome-192x192.png",
            "sizes" => "192x192",
            "type" => "image/png"
        ];

        $icon2 = [
            "src" => "/android-chrome-512x512.png",
            "sizes" => "512x512",
            "type" => "image/png"
        ];

        return response()->json([
           'name' => 'Bike Tracker',
           'short_name' => 'B Tracker',
           'description' => 'Tracker Application for bicycles',
           'display' => 'standalone',
           'theme_color' => '#0038f2',
           'background_color' => '#e9ecef',
           'icons' => [$icon1, $icon2],
        ]);
    }
}
