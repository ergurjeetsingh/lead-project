<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ui-toolkit">

<head>
	<title>{{ config('app.name', 'Lead With Us') }}</title>
	<meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name', 'Lead With Us') }}">
    <meta name="keywords" content="{{ config('app.name', 'Lead With Us') }}">
    <meta name="author" content="{{ config('app.name', 'Lead With Us') }}">
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        
        <!-- Theme Config Js -->
        <script src="{{ asset('assets/js/hyper-config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('assets/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">


    @stack('css')
</head>

<body>	
        @if(auth()->check())
            <div class="wrapper">
                @include('layouts.navbars.adminTopbar')        
                @include('layouts.navbars.adminSidebar')        
                @yield('content')            
            </div>
        @else
            @yield('content')            
        @endif
        <!--footer starts-->    
       
        <!-- script files -->

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>        
        
        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer>
        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <script>
            $(document).ready(function() {
            $('#find_service').on('keyup', function() {
                var search_dta = $(this).val();
                if (search_dta != "") {
                $('#autocomplete').show();
                $.ajax({
                    url: "#",
                    type: "POST",
                    data: 'search=' + search_dta,
                    success: function(data) {
                    // let obj = jQuery.parseJSON(data);
                    if (data !== '') {
                        $('#autocomplete').html(data);
                        $('#find_service').css('background', '#fff');
                    } else {
                        $('#autocomplete').fadeIn();
                        $('#autocomplete').html('<strong>No Service found...</strong>');
                        $('#find_service').css('background', '#fff');
                    }
                    }
                });
                } else {
                $('#autocomplete').fadeOut();
                }
                // Function to get and set the values in the input box
                $(document).on('click', '#selectval', function() {
                $('#find_service').val($(this).text());
                $('#autocomplete').fadeOut();
                });
            });
            });

            setInterval(() => {
            $(document).ready(() => {
                if ($('.tab7').css('display') != 'none') {
                setTimeout(() => {
                    $('#leader_serching').hide();
                    $('#leader_serched').show();
                }, 3000);
                }
            });
            }, 1000);
        </script>
        @stack('js')
        

</body>
</html>