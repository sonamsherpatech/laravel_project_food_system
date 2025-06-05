@extends('backend.layout.dashboard_master');
@section('main-content')
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="website_title">Website Title</label>
            <input type="text" class="form-control" name="website_title" id="website_title" required>
        </div>

        <div class="form-group">
            <label for="slogan">Slogan</label>
            <textarea class="form-control" name="slogan" id="slogan" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="logo_top">Logo Top</label>
            <input type="file" class="form-control-file" name="logo_top" id="logo_top" required>
        </div>

        <div class="form-group">
            <label for="logo_bottom">Logo Bottom</label>
            <input type="file" class="form-control-file" name="logo_bottom" id="logo_bottom">
        </div>

        <div class="form-group">
            <label for="favicon">Favicon</label>
            <input type="file" class="form-control-file" name="favicon" id="favicon">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" id="facebook">
        </div>

        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" name="twitter" id="twitter">
        </div>

        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="text" class="form-control" name="youtube" id="youtube">
        </div>

        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" class="form-control" name="linkedin" id="linkedin">
        </div>

        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" id="instagram">
        </div>

        <div class="form-group">
            <label for="google_map">Google Map Embed Code</label>
            <textarea class="form-control" name="google_map" id="google_map" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
@endsection
