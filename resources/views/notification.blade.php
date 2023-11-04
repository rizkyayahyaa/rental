<?php $page = 'notification'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <!-- Contact Details -->
            <div class="notification-details">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><i class="feather-arrow-left me-1"></i> Back</a>
                        </div>
                        <h4>Notifications</h4>
                        <div class="notify-head">
                            <ul class="notify-list nav">
                                <li>
                                    <a href="javascript:;" class="active" data-bs-toggle="tab" data-bs-target="#all">All</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-bs-toggle="tab" data-bs-target="#request">Request</a>
                                </li>
                            </ul>
                            <a href="javascript:void(0);"><i class="feather-check-circle"></i> Mark all as read</a>
                        </div>
                        <ul class="detail-list">
                            <li>
                                <div class="notification-item">
                                    <div class="notification-media">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                        </span>
                                    </div>
                                    <div class="notification-info">
                                        <h6><span>John Doe</span> Booked Electric Panel Repair Service</h6>
                                        <p><i class="feather-clock"></i> 2h ago</p>
                                        <div class="notify-btns">
                                            <a href="javascript:;" class="btn btn-primary">Accept</a>
                                            <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="notification-dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;" class="dropdown-item"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-item">
                                    <div class="notification-media">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}">
                                        </span>
                                    </div>
                                    <div class="notification-info">
                                        <h6><span>Mary</span> Commented your blog new blog</h6>
                                        <p><i class="feather-clock"></i> 4h ago</p>
                                    </div>
                                </div>
                                <div class="notification-dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;" class="dropdown-item"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-item">
                                    <div class="notification-media">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}">
                                        </span>
                                    </div>
                                    <div class="notification-info">
                                        <h6><span>Annette Silva</span> Booked car wash service</h6>
                                        <p><i class="feather-clock"></i> 10h ago</p>
                                    </div>
                                </div>
                                <div class="notification-dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;" class="dropdown-item"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-item">
                                    <div class="notification-media">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}">
                                        </span>
                                    </div>
                                    <div class="notification-info">
                                        <h6><span>John</span> Replied to your comment on new blog</h6>
                                        <p><i class="feather-clock"></i> 2h ago</p>
                                    </div>
                                </div>
                                <div class="notification-dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;" class="dropdown-item"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-item">
                                    <div class="notification-media">
                                        <span class="avatar-icon flex-shrink-0">
                                            <i class="feather-lock"></i>
                                        </span>
                                    </div>
                                    <div class="notification-info">
                                        <h6><span>Your Password</span> has been Successfully change</h6>
                                        <p><i class="feather-clock"></i> Sep 10, 2023 | 09:30am</p>
                                    </div>
                                </div>
                                <div class="notification-dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;" class="dropdown-item"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Contact Details -->
        </div>
    </div>
@endsection
