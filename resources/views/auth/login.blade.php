<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Sebagai Operator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('klorofil')}}/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('klorofil')}}/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('klorofil')}}/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('klorofil')}}/img/favicon.png">
</head>

<body>
        @if(session('gagal'))
            <div class="alert alert-danger" role="alert" data-toggle="modal" data-target="#exampleModal">
                {{session('gagal')}}
            </div>
      @endif

    <!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><h3>Login</h3></div>
								<p class="lead">Login as an Operator</p>
                            </div>

							<form class="form-auth-small" method="POST" action="{{ route('login') }}" >
                                    @csrf

								<div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Username</label>
                                    <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name"
                                    value="{{ old('user_name') }}" required autocomplete="user_name" autofocus placeholder="Username">

                                    @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

								<div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><a href="/">To Home</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Just The Operator Can Login</h1>
							<p>by The Operators</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
