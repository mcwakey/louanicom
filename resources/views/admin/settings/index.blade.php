@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Site Settings</h2>
    <small class="text-muted">Manage site, contact and social links</small>
</div>

<form method="post" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="row g-3">
    @csrf
    <div class="col-12 col-md-6">
        <label class="form-label">Site Name</label>
        <input class="form-control" name="site_name" value="{{ $settings['site_name'] ?? config('app.name') }}">
    </div>
    <div class="col-12">
        <label class="form-label">Meta Description</label>
        <textarea class="form-control" name="meta_description" rows="2">{{ $settings['meta_description'] ?? '' }}</textarea>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Meta Keywords</label>
        <input class="form-control" name="meta_keywords" value="{{ $settings['meta_keywords'] ?? '' }}">
    </div>

    <div class="col-12 col-md-6">
        <label class="form-label">Logo</label>
        <input class="form-control" type="file" name="logo">
        @if(!empty($settings['logo_path']))
            <div class="mt-2">Current logo: <img src="{{ asset('storage/'.$settings['logo_path']) }}" style="max-height:60px"></div>
        @endif
    </div>

    <hr class="my-3">
    <h5 class="mt-2">Contact</h5>
    <div class="col-12 col-md-6">
        <label class="form-label">Contact Email</label>
        <input class="form-control" name="contact_email" value="{{ $settings['contact_email'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Contact Phone</label>
        <input class="form-control" name="contact_phone" value="{{ $settings['contact_phone'] ?? '' }}">
    </div>
    <div class="col-12">
        <label class="form-label">Contact Address</label>
        <input class="form-control" name="contact_address" value="{{ $settings['contact_address'] ?? '' }}">
    </div>
    <div class="col-12">
        <label class="form-label">Opening Hours</label>
        <input class="form-control" name="contact_hours" value="{{ $settings['contact_hours'] ?? '' }}">
    </div>

    <hr class="my-3">
    <h5 class="mt-2">Social Links</h5>
    <div class="col-12 col-md-6">
        <label class="form-label">Facebook</label>
        <input class="form-control" name="social_facebook" value="{{ $settings['social_facebook'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Twitter</label>
        <input class="form-control" name="social_twitter" value="{{ $settings['social_twitter'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Instagram</label>
        <input class="form-control" name="social_instagram" value="{{ $settings['social_instagram'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">LinkedIn</label>
        <input class="form-control" name="social_linkedin" value="{{ $settings['social_linkedin'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">YouTube</label>
        <input class="form-control" name="social_youtube" value="{{ $settings['social_youtube'] ?? '' }}">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">TikTok</label>
        <input class="form-control" name="social_tiktok" value="{{ $settings['social_tiktok'] ?? '' }}">
    </div>

    <div class="col-12 text-end mt-3">
        <button class="btn btn-primary">Save Settings</button>
    </div>
</form>

@endsection
