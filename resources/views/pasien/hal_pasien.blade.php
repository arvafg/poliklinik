<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Philadelpia Clinics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('front')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/style.css">

    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('front')}}/images/ph.png">
  </head>

<body>
    <div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
						<a class="navbar-brand" href="/">Philadelpia Clinic</a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-8 mb-md-0 mb-3">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
									<div class="text"><span>Address</span><span>Jl.Taman Pondok Jati, Geluran, Taman</span></div>
								</div>
							</div>
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
									<div class="text"><span>Call us</span><span>(+62) 123 456 7890</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<div class="order-lg-last">
          <a href="/operator" class="btn btn-info">By Admin</a>
        </div>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="/#about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="/#team" class="nav-link">Team</a></li>
	        	<li class="nav-item"><a href="/#feedback" class="nav-link">Feedback</a></li>
	        	<li class="nav-item active"><a href="/halpasien" class="nav-link">Patient</a></li>
	        	<li class="nav-item"><a href="/haldokter" class="nav-link">Doctor</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
<!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('front')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Patient <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Our Patient</h1>
        </div>
      </div>
    </div>
  </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <br>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif

                @if(session('delete'))
                <div class="alert alert-danger " role="alert">
                    {{session('delete')}}
                </div>
                @endif

                {{-- <div class='row'>
                    <div class="col-6">
                        <h2>Nice To Meet You !</h2>
                    </div>

                    <div class="col-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                        data-target="#exampleModal">Tambah Data Pasien
                        </button>
                    </div> --}}


                    <table class='table table-hover table-striped'>
                        <thead class='table-dark' >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
                            <th>Service</th>
                        </tr>
                        </thead>
                            @php
                                $no=1;
                            @endphp
                        <tbody>
                        @foreach($data_pasien as $pasien)
                        <tr>

                            <td>{{$no}}</td>
                            <td>{{$pasien->nama}}</td>
                            <td>{{$pasien->jenis_kelamin}}</td>
                            <td>{{$pasien->tanggal_lahir}}</td>
                            <td>{{$pasien->alamat}}</td>
                            <td>{{$pasien->no_telp}}</td>
                            <td><a href="/pasien/{{$pasien->id}}/edit_pasien" class='btn btn-warning btn-sm' >Edit</a>

                            <a href="/pasien/{{$pasien->id}}/delete" class='btn btn-danger btn-sm'
                            onclick="return confirm('Are You Sure ?')" ><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"/>
                            <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"/>
                            </svg></a>

                            </td>

                        </tr>
                        </tbody>
                        @php
                            $no++;
                        @endphp
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</section>

<!-- Footer -->

    <footer class="footer ftco-section ftco-no-pt">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg">
              <div class="ftco-footer-widget py-4 py-md-5">
                <h2 class="logo"><a href="#">Philadelpia Clinic</a></h2>
                <p>To be the hospital of choice by providing reliable & quality health care services as well as Providing sincere heart care with professional, quality and cost effective behavior.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg">
              <div class="ftco-footer-widget ml-md-5 py-5">
                <h2 class="ftco-heading-2">Services</h2>
                <ul class="list-unstyled">
                  <li><a href="/halpasien" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Patient Information</a></li>
                  <li><a href="/haldokter" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Doctor Information</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Manual Lympahtic</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Medical Acupuncture</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Therapeutic Exercise</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Joint Mobilization</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg">
              <div class="ftco-footer-widget py-4 py-md-5">
                  <h2 class="ftco-heading-2">Contact information</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Taman Pondok Jati, Geluran, Taman, Sidoarjo, Jawa Timur</span></li>
                      <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">infopoli@gmail.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg">
               <div class="ftco-footer-widget bg-primary p-4 py-5">
                <h2 class="ftco-heading-2">Business Hours</h2>
                <div class="opening-hours">
                    <h4>Opening Days:</h4>
                    <p class="pl-3">
                        <span>Monday – Friday : 9am to 20 pm</span>
                        <span>Saturday : 9am to 17 pm</span>
                    </p>
                    <h4>Vacations:</h4>
                    <p class="pl-3">
                        <span>All Sunday Days</span>
                        <span>All Official Holidays</span>
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> This Website Just For Health
    <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Arva & Fahmi</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

      </footer>

    <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
      </div>


    <script src="{{asset('front')}}/js/jquery.min.js"></script>
    <script src="{{asset('front')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('front')}}/js/popper.min.js"></script>
    <script src="{{asset('front')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('front')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('front')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('front')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('front')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('front')}}/js/bootstrap-datepicker.js"></script>
    <script src="{{asset('front')}}/js/jquery.timepicker.min.js"></script>
    <script src="{{asset('front')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('front')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('front')}}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('front')}}/js/google-map.js"></script>
    <script src="{{asset('front')}}/js/main.js"></script>

    </body>
  </html>
