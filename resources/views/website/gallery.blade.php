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
                                <a href="{{url('/booking')}}" class="nav-item nav-link">Booking</a>
                                <a href="{{url('/gallery')}}" class="nav-item nav-link active">Gallery</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Our Gallery</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

@include('website.components.booking-form')

@endsection