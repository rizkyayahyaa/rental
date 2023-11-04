<?php $page = 'google-api'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-password">
            <div class="change-passwordback">
                <a href="{{ url('admin/social-authentication') }}"><i class="fe fe-arrow-left me-2"></i>Back </a>
            </div>
            <div class="change-passwordhead d-flex justify-content-between">
                <h3>Google API Credential</h3>
            </div>
            <div class="form-groupheads">
                <h2>Api Credentials</h2>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>API Client ID</label>
                    <input type="text" class="form-control" placeholder="Enter API Client ID">
                </div>
                <div class="form-group mb-5">
                    <label>API Client Secret Key </label>
                    <input type="text" class="form-control" placeholder="Enter API Client Secret Key">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="btn-path">
                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                </div>
            </div>
        </div>
    </div>
@endsection
