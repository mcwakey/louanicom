<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\Experience;
use App\Models\Partner;
use App\Models\MenuItem;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    $heroes = Hero::latest()->get();
    $hero = $heroes->first();
        $about = About::latest()->first();
        $experiences = Experience::all();
        $partners = Partner::all();
        $menu = MenuItem::where('visible',true)->orderBy('position')->get();
        $settings = [
            'site_name' => Setting::get('site_name', config('app.name')),
            'logo_path' => Setting::get('logo_path'),
            'meta_description' => Setting::get('meta_description'),
            'meta_keywords' => Setting::get('meta_keywords'),
            // contact
            'contact_email' => Setting::get('contact_email'),
            'contact_phone' => Setting::get('contact_phone'),
            'contact_address' => Setting::get('contact_address'),
            'contact_hours' => Setting::get('contact_hours'),
            // social
            'social_facebook' => Setting::get('social_facebook'),
            'social_twitter' => Setting::get('social_twitter'),
            'social_instagram' => Setting::get('social_instagram'),
            'social_linkedin' => Setting::get('social_linkedin'),
            'social_youtube' => Setting::get('social_youtube'),
            'social_tiktok' => Setting::get('social_tiktok'),
        ];

    return view('home', compact('hero','about','experiences','partners','heroes','menu','settings'));
    }
}
