<?php $page = 'view-service'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-xl-8">
                    <div class="serv-profile">
                        <h2>Car Repair Services</h2>
                        <ul>
                            <li>
                                <span class="badge">Car Wash</span>
                            </li>
                            <li class="service-map"><i class="fe fe-map-pin"></i> Alabama, USA</li>
                        </ul>
                    </div>
                    <div class="service-images big-gallery">
                        <img src="{{ URL::asset('/admin_assets/img/service-ban-01.jpg') }}" class="img-fluid" alt="img">
                        <a href="{{ URL::asset('/admin_assets/img/service-ban-01.jpg') }}" data-fancybox="gallery"
                            class="btn btn-show"><i class="fe fe-image me-1"></i> Show all photos</a>
                    </div>
                    <div class="service-wrap">
                        <h5>Service Details</h5>
                        <p>Car wash is a facility used to clean the exterior and, in some cases, the interior of motor
                            vehicles. Car washes can be self-serve, fully automated, or full-service with attendants who
                            wash the vehicle.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="service-wrap provide-service">
                        <h5>Service Provider</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <img src="{{ URL::asset('/admin_assets/img/profiles/avatar-02.jpg') }}"
                                        class="img-fluid" alt="img">
                                    <div class="provide-info">
                                        <h6>Member Since</h6>
                                        <div class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255
                                            reviews)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="fe fe-user"></i></span>
                                    <div class="provide-info">
                                        <h6>Member Since</h6>
                                        <p>Apr 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="fe fe-map-pin"></i></span>
                                    <div class="provide-info">
                                        <h6>Address</h6>
                                        <p>Hanover, Maryland</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="fe fe-mail"></i></span>
                                    <div class="provide-info">
                                        <h6>Email</h6>
                                        <p>thomash@eg.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="fe fe-phone"></i></span>
                                    <div class="provide-info">
                                        <h6>Phone</h6>
                                        <p>+1 888 888 8888</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social-icon provide-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="fe fe-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="fe fe-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="fe fe-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="fe fe-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Gallery</h5>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <div class="owl-nav mynav3"></div>
                            </div>
                        </div>
                        <div class="owl-carousel gallery-slider">
                            <div class="gallery-widget">
                                <a href="{{ URL::asset('/admin_assets/img/gallery/gallery-big-01.jpg') }}"
                                    data-fancybox="gallery">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/admin_assets/img/gallery/gallery-01.jpg') }}">
                                </a>
                            </div>
                            <div class="gallery-widget">
                                <a href="{{ URL::asset('/admin_assets/img/gallery/gallery-big-02.jpg') }}"
                                    data-fancybox="gallery">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/admin_assets/img/gallery/gallery-02.jpg') }}">
                                </a>
                            </div>
                            <div class="gallery-widget">
                                <a href="{{ URL::asset('/admin_assets/img/gallery/gallery-big-03.jpg') }}"
                                    data-fancybox="gallery">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/admin_assets/img/gallery/gallery-03.jpg') }}">
                                </a>
                            </div>
                            <div class="gallery-widget">
                                <a href="{{ URL::asset('/admin_assets/img/gallery/gallery-02.jpg') }}"
                                    data-fancybox="gallery">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/admin_assets/img/gallery/gallery-02.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card card-provide">
                        <div class="card-body">
                            <div class="provide-widget">
                                <div class="service-amount">
                                    <h5>$150<span>$170</span></h5>
                                    <p class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255 reviews)
                                    </p>
                                </div>
                                <div class="serv-proimg">
                                    <img src="{{ URL::asset('/admin_assets/img/profiles/avatar-02.jpg') }}"
                                        class="img-fluid" alt="img">
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                </div>
                            </div>
                            <div class="package-widget">
                                <h5>Available Service Packages</h5>
                                <ul>
                                    <li>Full car wash and clean</li>
                                    <li>Auto Electrical</li>
                                    <li>Pre Purchase Inspection</li>
                                    <li>Pre Purchase Inspection</li>
                                </ul>
                            </div>
                            <div class="package-widget pack-service">
                                <h5>Additional Service</h5>
                                <ul>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>House Cleaning</h6>
                                                    <p><i class="fe fe-map-pin"></i> Alabama, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/admin_assets/img/services/service-16.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Air Conditioner Service</h6>
                                                    <p><i class="fe fe-map-pin"></i> Illinois, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/admin_assets/img/services/service-07.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Interior Designing</h6>
                                                    <p><i class="fe fe-map-pin"></i> California, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Wooden Carpentry Work</h6>
                                                    <p><i class="fe fe-map-pin"></i> Alabama, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$354.45</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card card-available">
                                <div class="card-body">
                                    <div class="available-widget">
                                        <div class="available-info">
                                            <h5>Service Availability</h5>
                                            <ul>
                                                <li>Monday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Tuesday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Wednesday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Thursday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Friday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Saturday <span>9:30 AM - 7:00 PM</span> </li>
                                                <li>Sunday <span class="text-danger">Closed</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="map-grid">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="contact-map"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
