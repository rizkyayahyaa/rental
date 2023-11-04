<?php $page = 'provider-signup-subscription'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 mx-auto">
                    <div class="login-wrap">
                        <div class="login-header text-center">
                            <h3>Provider Signup</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mx-auto">
                    <div class="price-subscribe">
                        <div class="row">

                            <!-- Price List -->
                            <div class="col-md-4 d-flex">
                                <div class="price-card flex-fill">
                                    <div class="price-head">
                                        <div class="price-level">
                                            <h6>Basic</h6>
                                        </div>
                                        <h1>$50 <span>/ month</span></h1>
                                    </div>
                                    <div class="price-body">
                                        <ul>
                                            <li class="active">One listing submission</li>
                                            <li class="active">30 days expiration</li>
                                            <li class="active">Special Support</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="javascript:;" class="btn btn-choose">Choose<i
                                                    class="feather-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Price List -->

                            <!-- Price List -->
                            <div class="col-md-4 d-flex">
                                <div class="price-card flex-fill">
                                    <div class="price-head">
                                        <div class="price-level">
                                            <h6>Professional</h6>
                                        </div>
                                        <h1>$89 <span>/ month</span></h1>
                                    </div>
                                    <div class="price-body">
                                        <ul>
                                            <li class="active">One listing submission</li>
                                            <li class="active">60 days expiration</li>
                                            <li class="active">Special Support</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="javascript:;" class="btn btn-choose">Choose <i
                                                    class="feather-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Price List -->

                            <!-- Price List -->
                            <div class="col-md-4 d-flex">
                                <div class="price-card flex-fill">
                                    <div class="price-head">
                                        <div class="price-level">
                                            <h6>Startup</h6>
                                        </div>
                                        <h1>$120 <span>/ month</span></h1>
                                    </div>
                                    <div class="price-body">
                                        <ul>
                                            <li class="active">One listing submission</li>
                                            <li class="active">180 days expiration</li>
                                            <li class="active">Special Support</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="javascript:;" class="btn btn-choose">Choose <i
                                                    class="feather-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Price List -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mx-auto">
                            <div class="price-btn">
                                <a href="{{ url('provider-signup-payment') }}" class="btn btn-primary w-100">Next</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
