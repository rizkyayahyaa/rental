<?php $page = 'email-storage-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Email Configuration
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row location-set">
                                <div class="col-lg-6">
                                    <div class="form-grouphead mb-2">
                                        <h2 class="fs-14">Profile Picture</h2>
                                    </div>
                                    <div class="nav-menus">
                                        <h4>Mail Provider</h4>
                                        <div class="settings-view">
                                            <a href="javascript:void(0);"><i class="fe fe-settings"></i></a>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-grouphead mb-2">
                                        <h2 class="fs-14">&nbsp;</h2>
                                    </div>
                                    <div class="nav-menus">
                                        <h4>SMTP</h4>
                                        <div class="settings-view">
                                            <a href="javascript:void(0);"><i class="fe fe-settings"></i></a>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Email From Name</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Enter From Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Email From Address</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Email Global Footer</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Global Footer</label>
                                            <input type="text" class="form-control" placeholder="Enter Global Footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-groupheads ">
                                <h2>Send Test Email</h2>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Timezone</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Timezone</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/clock.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>USD</option>
                                                    <option>INR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Send Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
