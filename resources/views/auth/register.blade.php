





<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="{{ env('APP_NAME') }} - Login to Dashboard">
    <meta name="author" content="{{ env('APP_NAME') }} - Login to Dashboard">
    <meta name="keywords" content="{{ env('APP_NAME') }} - Login to Dashboard">

    <!-- Favicon -->
    <link rel="icon" href="main/assets/img/brand/favicon.ico" type="image/x-icon"/>

    <!-- Title -->
    <title>{{ env('APP_NAME') }} - Create an account</title>

    <!-- Bootstrap css-->
    <link id="style" href="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/icons.css" rel="stylesheet"/>
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/plugin.css" rel="stylesheet"/>

    <!-- Style css-->
    <link href="https://app.whirlwindinvts.pro/main/assets/css/style.css" rel="stylesheet">
    <link href="https://app.whirlwindinvts.pro/main/assets/css/plugins.css" rel="stylesheet">
    <script src="https://app.whirlwindinvts.pro/plugins/sweetalert/js/sweetalert.min.js"></script>
</head>

<body class="main-body leftmenu ltr dark-theme">
<style>
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(1), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(2), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(3){display:none;}

    div#google_translate_element div.goog-te-gadget-simple {margin:0px; padding:10px; display:inline-block; background-color:#000000; border:1px solid #000;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value {color:white;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value::after{content:"Translate Site"; padding-right:5px;}

    div#google_translate_element div.goog-te-gadget-simple img:nth-of-type(1) {display:none;}

</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Loader -->
<div id="global-loader">
    <img src="main/assets/img/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12 login_form rounded-start-11">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <h2 class="text-start mb-2">Sign Up</h2>
                                    <p class="mb-4 text-muted tx-13 ms-0 text-start">It's Free to Sign up and only takes a minute.</p>

                                    <center>	 </center>
                                    <form  action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <input type="hidden" name="referred_by" value="{{ request()->id}}" />


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Firstname</label>
                                            <input class="form-control" placeholder="Enter your Name" type="text" name="firstname" required="">
                                        </div>
                                            <div class="form-group text-start">
                                            <label class="tx-medium">Lastname</label>
                                            <input class="form-control" placeholder="Enter your Name" type="text" name="lastname" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Username</label>
                                            <input class="form-control" placeholder="Enter Preferred Username" type="text" name="username" required="">
                                        </div>


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Email</label>
                                            <input class="form-control" placeholder="Enter your email" type="email" autocomplete="username" name="email" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Mobile No.</label>
                                            <input class="form-control" placeholder="Enter Mobile Number" type="" name="phone" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Password</label>
                                            <input class="form-control border-end-0" placeholder="Enter your password" autocomplete="new-password" type="password" data-bs-toggle="password" name="password" required="">
                                        </div>


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Confirm Password</label>
                                            <input class="form-control border-end-0" placeholder="Confirm Password" autocomplete="new-password" type="password" data-bs-toggle="password" name="password_confirmation" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Referral Code</label>
                                            <input id="referrer" class="form-control" placeholder="Referral Code (Optional)" type="text" name="referrer">
                                        </div>


                                        <button type="submit" name="submits" class="btn btn-primary btn-block">Register</button>

                                    </form>
                                    <div class="text-start mt-4 ms-0 mb-3">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
                        <div class="mt-4 pt-5 p-2 pos-relative">
                            <div class="clearfix"></div>
                            <img src="https://app.whirlwindinvts.pro/account/reg.svg" class="ht-250 mb-0" alt="user">
                            <h2 class="mt-4 text-white tx-normal">Create Your Account</h2>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">It's Free to Sign up and only takes a minute</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
<!-- End Page -->

<!-- Jquery js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Bootstrap Show Password js-->
<script src="https://app.whirlwindinvts.pro/main/assets/js/bootstrap-show-password.min.js"></script>

<!-- generate-otp js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/generate-otp.js"></script>

<!-- Perfect-scrollbar js -->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Select2 js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/select2/js/select2.min.js"></script>

<!-- Color Theme js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/themeColors.js"></script>

<!-- swither styles js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/swither-styles.js"></script>

<!-- Custom js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/custom.js"></script>
<!-- Smartsupp Live Chat script -->

</body>
</html>
