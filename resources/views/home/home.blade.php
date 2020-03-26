@extends('layouts.front')

@section('home')

    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('front')}}/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
                <div class="col-md-6 ftco-animate">
                    <div class="text w-100">
                        <h1 class="mb-4">Welcome to our Philadelpia Clinic</h1>
                        <p class="">To be the hospital of choice by providing reliable & quality health care services as well as Providing sincere heart care with professional, quality and cost effective behavior.</p>
                        <p><a href="#register" class="btn btn-primary">Health Check !</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{asset('front')}}/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
                <div class="col-md-6 ftco-animate">
                    <div class="text w-100">
                        <h1 class="mb-4">Philadelpia care for the whole family</h1>
                        <p>To be the hospital of choice by providing reliable & quality health care services as well as Providing sincere heart care with professional, quality and cost effective behavior.</p>
                        <p><a href="#register" class="btn btn-primary">Health Check !</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb bg-dark"  >
            <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment d-md-flex" id="register">
                        <div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
                            <span class="subheading">Register New Patient</span>
                            <h2 class="mb-4">Free Consultation</h2>
    {{-- form --}}
                    <form action="/home/create" method="POST" class="appointment">
                            {{csrf_field()}}
                            <div class="row justify-content-center">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="nama" type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="form-field">
                                    <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="">Gender</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tanggal_lahir" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="alamat" name="alamat" class="form-control" placeholder="Address" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="no_telp" class="form-control" placeholder="Phone number" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-wrap">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="btn btn-secondary py-3 px-4">
                                    </div>
                                    </div>
                            </div>
                    </form>

{{-- sampingnya --}}
                        </div>
                        <div class="col-md-4 bg-white text-center p-5">
                            <div class="desc border-bottom pb-4">
                                <h2>Business Hours</h2>
                        <div class="opening-hours">
                            <h4>Opening Days:</h4>
                            <p class="pl-3">
                                <span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
                                <span><strong>Saturday :</strong> 8am to 17 pm</span>
                            </p>
                            <h4>Vacations:</h4>
                            <p class="pl-3">
                                <span>All Sunday Days</span>
                                <span>All Official Holidays</span>
                            </p>
                        </div>
                            </div>
                                <div class="desc pt-4 ">
                                    <h3 class="heading">For Emergency Cases</h3>
                                    <span class="phone">(+62) 123 456 7890</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- OUR BENEFIT --}}
    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">We offer Services</span>
            <h2>Our Benefits</h2>
        </div>
        </div>
            <div class="row">
        <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-chiropractic"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Spinal Manupulation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-acupuncture"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Medical Acupuncture</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>

        </div>
        <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-electrotherapy"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Electrotherapy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-examination"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Therapeutic Exercise</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>
        </div>

        <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-lymph-nodes"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Manual Lympahtic</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>
            <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-bone"></span>
            </div>
            <div class="media-body pl-3">
                <h3 class="heading">Joint Mobilization</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section> --}}

{{-- TEAM --}}
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" id="team">
        <br>
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts Crew / Doctor</h2>
        </div>
        </div>

            <div class="row no-gutters">
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('front')}}/images/staff-1.jpg);"></div>
                        </div>

                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Hilmi Rafif</h3>
                            <span class="position mb-2">Chief Medical Officer</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('front')}}/images/staff-2.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Fahmi Abdillah</h3>
                            <span class="position mb-2">Expert Psikiater</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('front')}}/images/staff-3.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Arva Firjatullah</h3>
                            <span class="position mb-2">Chief Medical Neurologist</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('front')}}/images/staff-4.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Rozieq Syarwan</h3>
                            <span class="position mb-2">Licensed Massage Therapist</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('front')}}/images/staff-5.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Reza Zulfi</h3>
                            <span class="position mb-2">Front Desk Coordinator</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

{{-- Feedback --}}
    <section class="ftco-section testimony-section bg-dark" id="feedback">
            <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
            </div>
        <div class="row ftco-animate">
        <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                    <p class="mb-4">This website is so amazing, i cant leave this page.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url({{asset('front')}}/images/person_1.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Doni Chandra</p>
                            <span class="position">Social Influencer</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                    <p class="mb-4">Wow, cool service, never forget !.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url({{asset('front')}}/images/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Rizki Agung</p>
                            <span class="position">Chief Officer</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                    <p class="mb-4">I cant speak more, its so amazing !.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url({{asset('front')}}/images/person_3.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Kinara Al-Ghifari</p>
                            <span class="position">CEO Inpedia Studio</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                    <p class="mb-4">unexpected.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url({{asset('front')}}/images/person_4.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Rayhan Nady</p>
                            <span class="position">IT Manager</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>

{{-- ABOUT --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light" id="about">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{asset('front')}}/images/bg_3.jpg);">
                        <a href="https://www.youtube.com/watch?v=Ejv0Gk-mGko" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start py-5">
                <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">Welcome to Philadelpia Clinic</span>
                    <h2 class="mb-4">About Philadelpia</h2>
                    <p>To be the hospital of choice by providing reliable & quality health care services as well as Providing sincere heart care with professional, quality and cost effective behavior.</p>
                </div>
                </div>
                        <div class="row ftco-counter pb-5" id="section-counter">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="45">0</strong>
                    </div>
                    <div class="text">
                        <span>Years of <br>Experienced</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="2342">0</strong>
                    </div>
                    <div class="text">
                        <span>Happy <br>Customers</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="30">0</strong>
                    </div>
                    <div class="text">
                        <span>Award <br>Winning</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>


{{-- GALERI --}}
    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container-fluid px-md-0">
                <div class="row no-gutters">
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-1.jpg);">
                <a href="{{asset('front')}}/images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Foot Pain</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-2.jpg);">
                <a href="{{asset('front')}}/images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Arm Pain</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-3.jpg);">
                <a href="{{asset('front')}}/images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Shoulder Pain</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-4.jpg);">
                <a href="{{asset('front')}}/images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Back Pain</a></h2>
                </div>
            </div>
            </div>
        </div>

        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-5.jpg);">
                <a href="{{asset('front')}}/images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Head &amp; Migraines</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-6.jpg);">
                <a href="{{asset('front')}}/images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Wear &amp; Tear</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-7.jpg);">
                <a href="{{asset('front')}}/images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Arm Pain</a></h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front')}}/images/work-8.jpg);">
                <a href="{{asset('front')}}/images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                    <h2><a href="work-single.html">Lower Back Pain</a></h2>
                </div>
            </div>
            </div>
        </div>
        </div>
            </div>
        </section> --}}


{{-- BLOG --}}
    {{-- <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
        </div>
        </div>
        <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('front')}}/images/image_1.jpg');">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{asset('front')}}/images/person_2.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
            </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('front')}}/images/image_2.jpg');">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{asset('front')}}/images/person_3.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
            </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('front')}}/images/image_3.jpg');">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{asset('front')}}/images/person_1.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
            </div>
            </div>
        </div>
        </div>
        </div>
        </section> --}}
@stop
