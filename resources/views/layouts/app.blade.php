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
    <link href="{{ asset('images/gigtodoFav.ico') }}" rel="shortcut icon" type="image/x-icon">
	<link href="{{ asset('css/categories_nav_styles.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/knowledge_bank.css') }}" type="text/css" rel="stylesheet">    
	<link href="{{ asset('css/foopicker.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/pikaday.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/sweat_alert.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet">
    <!-- custom css file -->
	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/leader.css') }}" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @stack('css')
</head>

<body>	
        
        @include('layouts.navbars.header')        
        @yield('content')            
        
        <!--footer starts-->

        @include('layouts.navbars.footer')        
       
        <!-- script files -->

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>        

        <script src="{{ asset('js/foopicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/pikaday.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/sweat_alert.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/StepFormValidation.js') }}" type="text/javascript"></script>
        
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