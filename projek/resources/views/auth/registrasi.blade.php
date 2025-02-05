<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo"></div>
								<p class="lead">Sign Up</p>
							</div>
							<form class="form-auth-small" action="/registrasi/create" method="POST">
                                {{ csrf_field() }}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Nama Lengkap</label>
									<input name="name" type="text" class="form-control" id="signin-email" placeholder="Nama Lengkap" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">NIM</label>
									<input name="nim" type="text" class="form-control" id="signin-email" placeholder="NIM" value="{{old('nim')}}" required>
								</div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Program Studi</label>
									<input name="jurusan" type="text" class="form-control" id="signin-email" placeholder="Program Studi" value="{{old('jurusan')}}" required>
								</div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder="Email" value="{{old('email')}}" required>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="signin-password" placeholder="password" required>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="signin-password" placeholder="konfirmasi password" required>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								
								<button type="submit" class="btn btn-primary btn-lg btn-block">Registrasi</button>
							</form>
							<div style="margin-top:20px;" class="text-center">
								<p>Sudah punya akun?</p>
								<a href="/" class="btn btn-primary btn-xs" role="button" data-bs-toggle="button">Login</a>
							</div>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Web Penyedia Informasi Mata Kuliah Supporting Course</h1>
							<p>by Tampan People</p>
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
