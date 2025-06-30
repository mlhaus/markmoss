<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Mark Moss</title>
<link
rel="shortcut icon"
href="{{asset('images/favicon.ico')}}"
type="image/x-icon"
/>
{{-- The asset() helper is designed to generate a URL for a file stored locally in your project's public directory (like your CSS or JavaScript files).--}}
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/fancybox.css')}}" />
<link rel="stylesheet" href="{{asset('css/slick.css')}}" />
<link rel="stylesheet" href="{{asset('css/plyr.css')}}" />
<link rel="stylesheet" href="{{asset('icofont/icofont.css')}}" />
<link rel="stylesheet" href="{{asset('css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>
<body>
<!-- preloader -->
<!-- <div class="ic-preloader">
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
</div> -->
<!-- preloader -->

<!-- Header
============================================= -->
<x-master-header />

{{ $slot }}

<!-- Footer
============================================= -->

<footer class="ic-footer">
    <div class="ic-container">
        <div class="ic-footer-content">
            <a href="#" class="ic-footer-logo d-inline-block">
                <img src="{{asset('images/markmoss_logo@2x.png')}}" alt="Mark Moss logo" />
            </a>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p>
                        Wait 'til you hear Mark's original stuff. He has a wide selection of original acoustic rock songs to choose from, characterized by diversity and creativity. And from a lyrical content, he always gives you something to think about.
                    </p>
                </div>
            </div>
            <div class="ic-footer-address">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-4">
                        <a href="https://www.facebook.com/markmossmusic" target="_blank">
                            <div class="ic-footer-items">
                                <i class="icofont-facebook"></i>
                                <div>
                                    @markmossmusic
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="mailto:markmosstx@gmail.com">
                            <div class="ic-footer-items">
                                <i class="icofont-ui-message"></i>
                                <div>
                                    markmosstx@gmail.com
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="tel:940-268-0164">
                            <div class="ic-footer-items">
                                <i class="icofont-phone"></i>
                                <div>
                                    <div>
                                        (940) 268-0164
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ic-footer-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <p>
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Mark Moss. All Rights Reserved. <!--Design & Develop With Love by Larability-->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer -->

<!-- back to top -->
<button type="button" class="ic-back-top">
    <i class="icofont-long-arrow-up"></i>
</button>

<!-- javascript files
============================================= -->
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/fancybox.umd.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/slick-animation.min.js')}}"></script>
<script src="{{asset('js/plyr.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/video-list.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
