<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link href="css/css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="css/css/twentytwenty-no-compass.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- capta -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0"
        nonce="Yj1bZADS"></script>
    <!-- froala -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tributejs@3.5.3/dist/tribute.css">
    <script src="https://cdn.jsdelivr.net/npm/tributejs@3.5.3/dist/tribute.js"></script>

    <meta name="viewport"
        content="width=device-width, ini                                                                                               n         tial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/website.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!--editor -->
    <link rel="stylesheet" type="text/css" href="[style path]/simditor.css" />


    <script type="text/javascript" src="[script path]/jquery.min.js"></script>
    <script type="text/javascript" src="[script path]/module.js"></script>
    <script type="text/javascript" src="[script path]/hotkeys.js"></script>
    <script type="text/javascript" src="[script path]/uploader.js"></script>
    <script type="text/javascript" src="[script path]/simditor.js"></script>

    <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">

    <!-- Include Tribute.js style. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tributejs@3.5.3/dist/tribute.css">
    <!-- Import jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>

    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
        type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js">
    </script>
</head>
<style>
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 60px;
    height: 60px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#return-to-top i {
    color: white;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 27px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}

#return-to-top:hover i {
    color: white;
    top: 5px;
}

</style>

<body class="position-ref full height">
    @include('layouts.header')
    @yield('content')
   <!-- Return to Top -->
   <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-circle-up"></i></a>
</body>
<footer>

    @include('layouts.footer')
</footer>
<script>
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
    $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
    });
    $('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
    scrollTop : 0 // Scroll to top of body
    }, 500);
    });
    </script>