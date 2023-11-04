<?php $page = 'provider-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            John Smith
        @endslot
    @endcomponent

    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="provider-img">
                        <img src="{{ URL::asset('/assets/img/provider/provider.png') }}" class="img-fluid" alt="img">
                        <span>10 Years Experience</span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="provider-info">
                        <h2>John Smith</h2>
                        <h5>Carpenter</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo dolor in reprehenderit in voluptate consequat. </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <span><i class="feather-mail"></i></span>
                                    <div class="provide-info">
                                        <h6>Email</h6>
                                        <p>thomash@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <span><i class="feather-phone"></i></span>
                                    <div class="provide-info">
                                        <h6>Phone</h6>
                                        <p>+1 888 888 8888</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <span><i class="feather-map-pin"></i></span>
                                    <div class="provide-info">
                                        <h6>Address</h6>
                                        <p>Hanover, Maryland</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <span><i class="feather-globe"></i></span>
                                    <div class="provide-info">
                                        <h6>Website</h6>
                                        <p>wwww.examplewebsite.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <span><i class="feather-book-open"></i></span>
                                    <div class="provide-info">
                                        <h6>Language</h6>
                                        <p>English, Arabic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="social-icon provide-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="provider-details">
                        <h5>Service Details</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                            dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                            soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                            possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                    <div class="provider-details provide-area">
                        <h5>Areas of Expertise</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                            dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                            soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                            possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-01.svg') }}" alt="img">
                                    <h6>Construction</h6>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-02.svg') }}" alt="img">
                                    <h6>Car Wash</h6>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-03.svg') }}" alt="img">
                                    <h6>Electrical</h6>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-04.svg') }}" alt="img">
                                    <h6>Cleaning</h6>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-05.svg') }}" alt="img">
                                    <h6>Carpentry</h6>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="construct-box flex-fill">
                                    <img src="{{ URL::asset('/assets/img/icons/feature-icon-06.svg') }}" alt="img">
                                    <h6>Plumbing</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="provider-details">
                        <h5>Benefits of Member</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="mb-0">
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Get In Touch -->
                    <div class="contact-queries">
                        <h2>Get In Touch</h2>
                        <form action="contact-us">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <div class="form-icon">
                                            <input class="form-control" type="text" placeholder="Enter Your Full Name">
                                            <span class="cus-icon"><i class="feather-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <div class="form-icon">
                                            <input class="form-control" type="email" placeholder="Enter Email Address">
                                            <span class="cus-icon"><i class="feather-mail"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone Number</label>
                                        <div class="form-icon">
                                            <input class="form-control" type="text" placeholder="Enter Phone Number">
                                            <span class="cus-icon"><i class="feather-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Message</label>
                                        <div class="form-icon form-msg">
                                            <textarea class="form-control" rows="4" placeholder="Enter your Comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary" type="submit">Send Message<i
                                            class="feather-arrow-right-circle ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Get In Touch -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Content -->
@endsection
