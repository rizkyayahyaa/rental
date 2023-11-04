<?php $page = 'system-information'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">

        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <div class="row">
                <div class="content-table">

                    @component('admin.components.settingspageheader')
                        @slot('titleset')
                            System Information
                        @endslot
                    @endcomponent

                    <div class="col-lg-10 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-groupheads">
                                        <h2>Application Environment</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Site/App Name</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Truelysell">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Site Main URL</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control"
                                                        value="https://truelysell.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Site App URL</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control"
                                                        value="https://app.truelysell.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Site App Mode</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Production">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Debug Mode</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Disable">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>HTTPS Connection</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Yes">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Force SSL (HTTPS)</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Enable">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Default Upload Directory</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control"
                                                        value="/truelysell/public">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Log Directory</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="/logs">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Cache Directory</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="/framework">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-groupheads">
                                        <h2>Server Environment</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Server Info</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" placeholder="Example">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Site/App Name</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Truelysell">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Server Timezone</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <div class="group-image">
                                                        <input type="text" class="form-control"
                                                            value="https://truelysell.com">
                                                        <img src="{{URL::asset('/admin_assets/img/icons/info.svg')}}" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>PHP Version</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="7.4.32">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>cURL version</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control"
                                                        value="7.85.0, OpenSSL/1.1.1q">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>OpenSSL</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control"
                                                        value="OpenSSL 1.1.1q 5 Jul 2023 | 269488415">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>MySQL Version</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="5.7.23-23">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>PHP Post Max Size</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="550MB">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Max Upload Size</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="512MB">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>PHP Memory Limit</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="512MB">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>PHP Time Limit</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <div class="group-image">
                                                        <input type="text" class="form-control" value="60">
                                                        <img src="{{URL::asset('/admin_assets/img/icons/bx-error.svg')}}" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>PHP Max Input Vars</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <div class="group-image">
                                                        <input type="text" class="form-control" value="100">
                                                        <img src="{{URL::asset('/admin_assets/img/icons/bx-error.svg')}}" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>ionCube Loader</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Enabled / 10.4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Fileinfo Extension</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Enabled">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>Mbstring Extension</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Enabled">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-set mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-12">
                                                <div class="location-setcontent">
                                                    <h5>XML Extension</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-12">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" value="Enabled">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-path">
                            <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
