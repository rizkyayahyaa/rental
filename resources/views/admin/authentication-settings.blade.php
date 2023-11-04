<?php $page = 'authentication-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Authendiation Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>Allow Registration</h5>
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="active-switch mb-2">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                        <ul>
                            <li>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span><i></i></span>
                                    <b class="check-content">Invite Only</b>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>Verfication Require</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                    <div class="form-group-set authentication-heading">
                        <h4>Verfication Expired</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="form-group mb-0">
                            <label>Expire</label>
                            <input type="text" placeholder="60" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>Refferal System</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="active-switch mb-1">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>Login Type</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="form-group">
                            <ul class="custom-radiosbtn">
                                <li>
                                    <label class="radiossets">Mobile
                                        <input type="radio" checked="checked" name="radio-btn">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radiossets">Email
                                        <input type="radio" name="radio-btn">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>Password</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="active-switch mb-1">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>OTP System</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="active-switch mb-1">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-heading">
                        <h4>OTP Type</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group-set authentication-buttons">
                        <div class="form-group">
                            <ul class="custom-radiosbtn">
                                <li>
                                    <label class="radiossets">Sms OTP
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radiossets">Email OTP
                                        <input type="radio" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
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
