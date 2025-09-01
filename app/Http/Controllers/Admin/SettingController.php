<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $keys = [
            'site_name','logo_path','meta_description','meta_keywords',
            // contact
            'contact_email','contact_phone','contact_address','contact_hours',
            // social
            'social_facebook','social_twitter','social_instagram','social_linkedin','social_youtube','social_tiktok'
        ];
        $settings = [];
        foreach($keys as $k){ $settings[$k] = Setting::get($k); }
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'site_name'=>'nullable|string',
            'meta_description'=>'nullable|string',
            'meta_keywords'=>'nullable|string',
            // contact
            'contact_email'=>'nullable|string',
            'contact_phone'=>'nullable|string',
            'contact_address'=>'nullable|string',
            'contact_hours'=>'nullable|string',
            // social
            'social_facebook'=>'nullable|string',
            'social_twitter'=>'nullable|string',
            'social_instagram'=>'nullable|string',
            'social_linkedin'=>'nullable|string',
            'social_youtube'=>'nullable|string',
            'social_tiktok'=>'nullable|string',
            'logo'=>'nullable|image|max:2048'
        ]);

        // basic site/meta
        Setting::set('site_name', $data['site_name'] ?? '');
        Setting::set('meta_description', $data['meta_description'] ?? '');
        Setting::set('meta_keywords', $data['meta_keywords'] ?? '');

        // contact
        Setting::set('contact_email', $data['contact_email'] ?? '');
        Setting::set('contact_phone', $data['contact_phone'] ?? '');
        Setting::set('contact_address', $data['contact_address'] ?? '');
        Setting::set('contact_hours', $data['contact_hours'] ?? '');

        // social
        Setting::set('social_facebook', $data['social_facebook'] ?? '');
        Setting::set('social_twitter', $data['social_twitter'] ?? '');
        Setting::set('social_instagram', $data['social_instagram'] ?? '');
        Setting::set('social_linkedin', $data['social_linkedin'] ?? '');
        Setting::set('social_youtube', $data['social_youtube'] ?? '');
        Setting::set('social_tiktok', $data['social_tiktok'] ?? '');

        if($request->hasFile('logo')){
            $path = $request->file('logo')->store('settings','public');
            Setting::set('logo_path', $path);
        }

        return redirect()->route('admin.settings.index');
    }
}
