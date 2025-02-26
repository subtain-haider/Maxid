<?php include 'header.php'; ?>

<main class="main">

	<!-- Start Breadcrumb
		============================================= -->
	<div class="site-breadcrumb" style="background: url(assets/img/pictures/breadcrumb.jpg)">
		<div class="container">
			<div class="site-breadcrumb-wpr">
				<h2 class="breadcrumb-title">Login</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.php">Home</a></li>
					<li class="active">Login</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End  Breadcrumb -->

	<!-- Start Register
		============================================= -->
	<div class="reg-area bg de-padding">
		<div class="container">
			<div class="reg-wpr">
				<div class="login-form">
					<i class="header-icon">
						<img src="assets/img/logo/logo.png" alt="MaanSoft">
					</i>
					<h4 class="register-title mb-50">Login</h4>
					<form class="row g-5">
						<div class="col-md-12">
							<input type="text" class="form-control input-style-2" placeholder="Username/Email">
						</div>
						<div class="col-md-12">
							<input type="password" class="form-control input-style-2" placeholder="Password">
						</div>
						<div class="col-md-6">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember Me
								</label>
							</div>
						</div>
						<div class="col-md-6">
							<a href="#" class="rs-ps"><span>Reset Password</span></a>
						</div>
						<div class="col-12">
							<div class="login-btns">
								<button type="submit" class="btn-1 btn-circle btn-md">
									Login
								</button>
								<span class="reg-acc">
									Don't Have an Account <a href="register.php">Sign Up</a>?
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Register -->

</main>
<?php include 'footer.php'; ?>