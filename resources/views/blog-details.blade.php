<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Our Blog
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Blog Details
        @endslot
        @slot('li_3')
            Blog
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12 blog-details">

                    <div class="blog-head">
                        <div class="blog-category">
                            <ul>
                                <li><span class="cat-blog">Construction</span></li>
                            </ul>
                        </div>
                        <h3>Lorem ipsum dolor sit amet, eiusmod tempor ut labore et dolore
                            magna aliqua. </h3>
                        <div class="blog-category sin-post">
                            <ul>
                                <li><i class="feather-calendar me-1"></i>28 Apr 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                alt="Post Author"><span>Admin</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog blog-list">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-04.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p class="test-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <div class="social-widget blog-review">
                        <h4>Tags</h4>
                        <div class="ad-widget">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Construction</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Car Wash</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Appliance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Interior</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Carpentry</a>
                            </ul>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="service-wrap blog-review">
                        <h4>Comments</h4>
                        <ul>
                            <li>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                class="img-fluid" alt="img">
                                            <div class="review-name">
                                                <h6>Dennis</h6>
                                                <p>a week ago</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="reply-box"><i class="fas fa-reply me-2"></i>
                                            Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                    <div class="new-comment reply-com">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Name*</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Email*</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Website</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Your Website">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Message*</label>
                                                        <textarea rows="4" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="submit-section">
                                                    <button class="btn btn-primary submit-btn" type="submit">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="comments-reply">
                                    <li>
                                        <div class="review-box">
                                            <div class="review-profile">
                                                <div class="review-img">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                        class="img-fluid" alt="img">
                                                    <div class="review-name">
                                                        <h6>Dennis</h6>
                                                        <p>a week ago</p>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="reply-box"><i
                                                        class="fas fa-reply me-2"></i> Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                class="img-fluid" alt="img">
                                            <div class="review-name">
                                                <h6>Jaime</h6>
                                                <p>a week ago</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="reply-box"><i class="fas fa-reply me-2"></i>
                                            Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                    <div class="new-comment reply-com">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Name*</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Email*</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Website</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Your Website">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Message*</label>
                                                        <textarea rows="4" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="submit-section">
                                                    <button class="btn btn-primary submit-btn" type="submit">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                class="img-fluid" alt="img">
                                            <div class="review-name">
                                                <h6>Joseph</h6>
                                                <p>a week ago</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="reply-box"><i class="fas fa-reply me-2"></i>
                                            Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                    <div class="new-comment reply-com">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Name*</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Email*</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Website</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Your Website">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Message*</label>
                                                        <textarea rows="4" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="submit-section">
                                                    <button class="btn btn-primary submit-btn" type="submit">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /Reviews -->

                    <!-- Comments -->
                    <div class="new-comment">
                        <h4>Write A Comments</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name*</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email*</label>
                                        <input type="email" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Message*</label>
                                        <textarea rows="6" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Comments -->

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 blog-sidebar theiaStickySidebar">

                    <!-- Search -->
                    <div class="card search-widget">
                        <div class="card-body">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Categories -->
                    <div class="card about-widget">
                        <div class="card-body">
                            <h4 class="side-title">About Me</h4>
                            <img src="{{ URL::asset('/assets/img/profile.jpg') }}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <a href="javascript:;" class="btn btn-primary">About Author</a>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Categories -->
                    <div class="card category-widget">
                        <div class="card-body">
                            <h4 class="side-title">Categories</h4>
                            <ul class="categories">
                                <li><a href="{{ url('categories') }}">Car Wash</a></li>
                                <li><a href="{{ url('categories') }}">Plumbing</a></li>
                                <li><a href="{{ url('categories') }}">Carpenter</a></li>
                                <li><a href="{{ url('categories') }}">Computer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Latest Posts -->
                    <div class="card post-widget">
                        <div class="card-body">
                            <h4 class="side-title">Latest News</h4>
                            <ul class="latest-posts">
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-01.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-03.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->

                    <!-- Tags -->
                    <div class="card tags-widget">
                        <div class="card-body">
                            <h4 class="side-title">Tags</h4>
                            <ul class="tags">
                                <li><a href="javascript:;" class="tag">Consulting</a></li>
                                <li><a href="javascript:;" class="tag">Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Tags -->

                    <!-- Archives -->
                    <div class="card widget widget-archive mb-0">
                        <div class="card-body">
                            <h4 class="side-title">Archives</h4>
                            <ul>
                                <li><a href="javascript:void(0);">January 2023</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Archives -->

                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>
    </div>
@endsection
