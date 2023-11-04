<?php $page = 'paypal'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-password">
            <div class="change-passwordback">
                <a href="{{ url('admin/payment-gateways') }}"><i class="fe fe-arrow-left me-2"></i>Back </a>
            </div>
            <div class="change-passwordhead d-flex justify-content-between">
                <h3>Paypal</h3>
                <div class="active-switch ">
                    <label class="switch">
                        <input type="checkbox" checked="">
                        <span class="sliders round"></span>
                    </label>
                </div>
            </div>
            <div class="form-groupheads">
                <h2>Api Credentials</h2>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Api Client ID</label>
                    <input type="text" class="form-control" placeholder="Enter Your Id">
                </div>
                <div class="form-group">
                    <label>Api Client Secret</label>
                    <input type="text" class="form-control" placeholder="Enter Api Client Secret">
                </div>
            </div>
            <div class="form-groupheads d-flex justify-content-between">
                <h2>Paypal</h2>
                <div class="active-switch">
                    <label class="switch">
                        <input type="checkbox" checked="">
                        <span class="sliders round"></span>
                    </label>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="btn-path">
                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-primary">Update</a>
                </div>
            </div>
        </div>
    </div>
@endsection
