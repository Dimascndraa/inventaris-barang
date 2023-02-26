<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login - - SmartAdmin v4.0.1
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="/css/app.bundle.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="/css/fa-brands.css">
    </head>
    <body>
        <div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                                </a>
                            </div>
                            <a href="/page_register" class="btn-link text-white ml-auto">
                                Create Account
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
                            <form id="js-login" action="/intel_analytics_dashboard" role="form" class="text-center text-white mb-5 pb-5">
                                <div class="py-3">
                                    <img src="/img/demo/avatars/avatar-admin-lg.png" class="img-responsive rounded-circle img-thumbnail" alt="thumbnail">
                                </div>
                                <div class="form-group">
                                    <h3>
                                        Dr. Codex Lantern
                                        <small>
                                            drlantern@gotbootstrap.com
                                        </small>
                                    </h3>
                                    <p class="text-white opacity-50">Enter password to unlock screen</p>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <button class="btn btn-success shadow-0" type="button" id="button-addon5"><i class="fal fa-key"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="/page_login-alt" class="text-white opacity-90">Not Dr. Codex Lantern ?</a>
                                </div>
                            </form>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2019 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- base vendor bundle:
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="/js/vendors.bundle.js"></script>
        <script src="/js/app.bundle.js"></script>
        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>
    </body>
</html>