<?php $page = 'add-subscription'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">

                <!-- Payment Method -->
                <div class="col-md-7">
                    <div class="payment-methods">
                        <h6>Payments Methods</h6>
                        <label class="custom_radio">
                            <input type="radio" name="payment" class="payment-card" checked>
                            <span class="checkmark"></span>
                            Debit or Credit Card
                        </label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Name on Card</label>
                                    <input class="form-control" type="text" placeholder="John Smith">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Card Number</label>
                                    <input class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Expire Month</label>
                                    <input class="form-control" placeholder="MM" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Expire Year</label>
                                    <input class="form-control" placeholder="YYYY" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Expire Year</label>
                                    <input class="form-control" placeholder="****" type="text">
                                </div>
                            </div>
                        </div>
                        <label class="custom_radio">
                            <input type="radio" name="payment" class="payment-card">
                            <span class="checkmark"></span>
                            Paypal
                        </label>
                        <label class="custom_radio">
                            <input type="radio" name="payment" class="payment-card">
                            <span class="checkmark"></span>
                            Bank Transfer
                        </label>
                        <h6>Billing Address <span>(Optional)</span></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Company Name</label>
                                    <input class="form-control" type="text" placeholder="Enter company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address</label>
                                    <input class="form-control" placeholder="Enter Your Address" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">City</label>
                                    <input class="form-control" placeholder="Enter your city" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Zipcode</label>
                                    <input class="form-control" placeholder="Enter Your Zipcode" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Country</label>
                                    <input class="form-control" placeholder="Enter your Country" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">VAT Number</label>
                                    <input class="form-control" placeholder="Enter Your VAT Nymber" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Payment Method -->

                <!-- Subscription Details -->
                <div class="col-md-5">
                    <div class="payment-subscribe">
                        <h6>Subscription Details</h6>
                        <div class="subscribe-box">
                            <ul>
                                <li>Plan Name: <span class="me-0">Professional <a href="javascript:;"
                                            class="ms-3">Edit</a></span></li>
                                <li>Plan Amount: <span>$89.00</span></li>
                                <li>Tax: <span>$10.00</span></li>
                                <li>Plan Amount: <span>$99.00</span></li>
                            </ul>
                        </div>
                        <a href="{{ url('provider-dashboard') }}" class="btn btn-primary">Proceed to Pay $99.00</a>
                        <label class="custom_check mb-0">
                            <input type="checkbox" name="rememberme" class="rememberme" checked>
                            <span class="checkmark"></span>By confirming you to agree Terms & Privacy you will be change
                            $60
                            every month until you cancel your subscription.
                        </label>
                    </div>
                </div>
                <!-- /Subscription Details -->

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
