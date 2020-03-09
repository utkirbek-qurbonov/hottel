@extends('layouts.app')
@section('title')
    Xonalar
@endsection
@section('content')

    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/roomspage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Rooms</span>
                                <h2>Our Rooms</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area r-padding1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Rooms</h3>
                            </div>
                            <h3 class="archivment-back">Our Rooms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($rooms as $room)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="{{asset('img/rooms/room1.jpg')}}" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html"> {{$room->number}}</a></h3>
                                <div class="per-night">
                                    <span><u>$</u> {{$room->cost}} <span>/  {{$room->time}}</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="#" class="btn view-btn1">View more  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="{{asset('img/gallery/gallery1.jpg')}}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{asset('img/gallery/gallery2.jpg')}}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{asset('img/gallery/gallery3.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>
@endsection
