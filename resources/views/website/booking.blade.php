@extends('website.components.app')
@section('content')

<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                                <a href="{{url('/about-us')}}" class="nav-item nav-link">About</a>
                                <a href="{{url('/services')}}" class="nav-item nav-link">Services</a>
                                <div class="nav-item dropdown">
                                    <a href="{{url('/rooms')}}" class="nav-item nav-link">Rooms</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{url('/king-bed')}}" class="dropdown-item">Standard King</a>
                                        <a href="{{url('/queen-bed')}}" class="dropdown-item">Queen Sized</a>
                                        <a href="{{url('/twin-beds')}}" class="dropdown-item">Twin Beds</a>
                                        <a href="{{url('/triple-beds')}}" class="dropdown-item">Triple Beds</a>
                                    </div>
                                </div>
                                <a href="{{url('/booking')}}" class="nav-item nav-link active">Booking</a>
                                <a href="{{url('/gallery')}}" class="nav-item nav-link">Gallery</a>
                                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href="" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">User Login<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="1">Adult 1</option>
                                              <option value="2">Adult 2</option>
                                              <option value="3">Adult 3</option>
                                            </select>
                                            <label for="select1">Select Adult</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2">
                                              <option value="1">Child 1</option>
                                              <option value="2">Child 2</option>
                                              <option value="3">Child 3</option>
                                            </select>
                                            <label for="select2">Select Child</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                              <option value="1">Room 1</option>
                                              <option value="2">Room 2</option>
                                              <option value="3">Room 3</option>
                                            </select>
                                            <label for="select3">Select A Room</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

@endsection