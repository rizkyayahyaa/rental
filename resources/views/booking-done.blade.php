<?php $page = 'booking-done'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent

    <div class="content book-content">
        <div class="container">
            <div class="row">

                <!-- Booking -->
                <div class="col-md-12">

                    <div class="login-back">
                        <a href="{{ url('service-details') }}"><i class="feather-arrow-left"></i> Back</a>
                    </div>

                    <!-- Booking Step -->
                    <ul class="step-register row">
                        <li class="activate col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}"
                                        alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Appointment</h6>
                                <p>Choose time & date for the service</p>
                            </div>
                        </li>
                        <li class="activate col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/wallet-icon.svg') }}"
                                        alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Appointment time date</h6>
                                <p>Select Payment Gateway</p>
                            </div>
                        </li>
                        <li class="active col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/book-done.svg') }}" alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Done </h6>
                                <p>Completion of Booking</p>
                            </div>
                        </li>
                    </ul>
                    <!-- /Booking Step -->

                    <!-- Booking Done -->
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="booking-done">
                                        <h6>Successfully Completed Payment</h6>
                                        <p>Your Booking has been Successfully Competed</p>
                                        <div class="book-submit">
                                            <a href="{{ url('/') }}" class="btn btn-primary"><i
                                                    class="feather-arrow-left-circle"></i> Go to Home</a>
                                            <a href="{{ url('customer-booking') }}" class="btn btn-secondary">Booking
                                                History</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="booking-done">
                                        <img src="{{ URL::asset('/assets/img/booking-done.png') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Done -->

                </div>
                <!-- /Booking -->

            </div>
        </div>
    </div>
@endsection
