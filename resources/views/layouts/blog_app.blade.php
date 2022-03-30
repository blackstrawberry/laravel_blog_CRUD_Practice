<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jong's blog</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css' }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css' }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css' }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css' }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css' }}" type="text/css">
</head>

<body>

    @yield('blog_content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-left">
                        <div class="logo">
                            <a href="./index.html">
                                <h2>jong's blog</h2>
                            </a>
                        </div>
                        <p>Laravel Fraimwork and CRUD Practice.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <form action="/" class="subscribe-form">
                        <h3>Subscribe</h3>
                        <input type="email" placeholder="Your e-mail">
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="social-links">
                        <a href="/"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="/"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                        <a href="/"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="/"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="/"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>