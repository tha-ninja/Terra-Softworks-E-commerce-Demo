<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <title>{{ config('app.name') }}</title>

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

        <style type="text/css">
            .form-control{
             background-color: #fff6e4cf;   
            }
        </style>

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                
                
            </div>
        	<div class="m-t-40 card-box" style="padding: 0px; width: 450px;">
                <div class="text-center">
                    <a href="{{ url('/') }}" class="logo"><span>Swype<span>Pay</span></span></a>
                    <h5 class="text-muted m-t-0 font-600">Sign in to your account</h5>
                    <hr>
                </div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" action="{{ route('dashboard') }}" autocomplete="OFF">
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Merchant Code</label>
                            <div class="col-xs-12">
                                <input class="form-control" style="text-transform: uppercase;" type="text" required="" placeholder="E.g TRADER2020">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>4 Digit PIN</label>
                            <div class="col-xs-12">
                                <input class="form-control" maxlength="4" type="password" required="" placeholder="4 Digit PIN">
                            </div>
                        </div>
                    </div>

                      
                        <div class="row">
                            <div class="form-group m-t-30 m-b-0 col-md-5">
                            <div class="col-sm-12">
                                <p><i class="fa fa-arrow-left m-r-5"></i> Personal Account</p>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-30 col-md-7">
                            <div class="col-xs-12">
                                <button class="btn btn-round btn-block btn-xs btn-info waves-effect waves-light" style="border-radius: 30px;" type="submit">Sign In -for Businesses</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="" style="background-color: #f1f1f1a8;">
                     <div class="form-group" >
                            <div class="col-sm-12">
                                <p><i class="fa fa-info-circle"></i> By Continuing, you agree to SwypePay's Conditions of Use and Privacy Policy.</p>
                            </div>
                        </div>
                    </div>
                     <div class="form-group text-center m-t-30 m-b-0">
                            <div class="col-sm-12">
                                Forgot your password? Click<a href="#"> Here</a>
                            </div>
                        </div>
                        
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Don't have an account? <a href="#" class="btn btn-primary btn-trans waves-effect waves-primary w-md m-b-5"><b>Sign Up</b></a></p>
                </div>
            </div>
            
        </div>
        <!-- end wrapper page -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ed244bdc75cbf1769f0c9c0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


      {{--   <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script> --}}
	
	</body>
</html>