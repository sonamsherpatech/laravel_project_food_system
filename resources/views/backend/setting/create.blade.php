@extends('backend.layout.dashboard_master')
@section('panel', 'Setting')
@section('title', 'Create Setting')
@section('main-content')
    <!--begin::Col-->
    <div class="col-md-12">
        <!--begin::Accordion-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Create Setting</div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                @include('backend.includes.flash_message')
                <form enctype="multipart/form-data" action="{{ route('backend.setting.store') }}" method="post">
                    @csrf
                    @include('backend.includes.input_field', [
                        'name' => 'website_title',
                        'title' => 'Website Title',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'slogan',
                        'title' => 'Slogan',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'address',
                        'title' => 'Address',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'phone',
                        'title' => 'Phone',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'email',
                        'title' => 'Email',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'twitter',
                        'title' => 'Twitter',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'instagram',
                        'title' => 'Instagram',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'facebook',
                        'title' => 'Facebook',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'linkedin',
                        'title' => 'Linkedin',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'youtube',
                        'title' => 'Youtube',
                    ])
                    @include('backend.includes.input_field', [
                        'name' => 'google_map',
                        'title' => 'Google map',
                    ])

                    <div class="form-group">
                        <label for="logo_top">Logo(top)</label>
                        <input type="file" class="form-control" name="logo_top_file" id="logo_top" />
                        @error('logo_top_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="logo_bottom">Logo(bottom)</label>
                        <input type="file" class="form-control" name="logo_bottom_file" id="logo_bottom" />
                        @error('logo_bottom_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="favicon">Favicon</label>
                        <input type="file" class="form-control" name="favicon_file" id="favicon" />
                        @error('favicon_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="submit" class="btn btn-success">
                        <input type="reset" name="clear" class="btn btn-danger" value="Clear">
                    </div>
                </form>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Accordion-->

    </div>
@endsection
