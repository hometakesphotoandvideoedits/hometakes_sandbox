 <a href="https://my.matterport.com/show/?m=B5xvv8pwUTN&brand=0">
     <div class="text-center p-3 " style="background-color: #242323;color: white;" type="submit">
         <h4 \>CLICK HERE TO EXPERIENCE A
             <b>MATTERPORT 3D TOUR NOW</b>
         </h4>
     </div>
 </a>
 @extends('layouts.layout')
 @section('content')
 <style>
ul.about li {
    display: inline-block;
    width: 24.7%;

    text-align: center;
    color: white;
    height: 100px;
}

.details {
    position: relative;
    text-align: center;
    color: white;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.aboutttitle {
    position: absolute;
    color: black;
}
 </style>
 <div class="container text-center">

     <div class="row">
         <div class="col-3">
             <div class="details " onclick="testimonials()">
                 <img src="images/videotabs/videotab01.jpg" alt="">
                 <img class="centered" src="images/play.png" width="64" height="64"><br>
                 <div class="abouttitle">TESTIMONIALS</div>
             </div>
         </div>
         <div class="col-3">
             <div class="details " onclick="about()">

                 <img src="images/videotabs/videotab02.jpg" alt="">
                 <img class="centered" src="images/play.png" width="64" height="64"><br>
                 <div class="abouttitle">ABOUT
                     HOMETAKES</div">
                 </div>
             </div>

         </div>
         <div class="col-3">
             <div class="details " id="btnproducts" onclick="products()">

                 <img src="images/videotabs/videotab03.jpg" alt="">
                 <img class="centered" src="images/play.png" width="64" height="64"><br>
                 <div class="abouttitle">OUR
                     PRODUCTS</div>
             </div>
         </div>
         <div class="col-3">
             <div class="details " onclick="help()">

                 <img src="images/videotabs/videotab04.jpg" alt="">
                 <img class="centered" src="images/play.png" width="64" height="64"><br>
                 <div class="abouttitle" id="tab4">HELP
                 </div>
             </div>
         </div>
     </div>

     <div id="testimonial" class="embed-responsive embed-responsive-4by3">
         <iframe width="560" height="295" src="https://www.youtube.com/watch?v=_ACuzw7BaW8&feature=emb_imp_woyt"
             frameborder="0" allowfullscreen></iframe>
     </div>
     <div id="about" class="embed-responsive embed-responsive-4by3">
         <iframe width="560" height="295"
             src="//www.youtube.com/embed/sRJnL9PwKVc?rel=0&modestbranding=1&showinfo=1&enablejsapi=1&autoplay=0&html5=1"
             frameborder="0" allowfullscreen></iframe>
     </div>
     <div id="products" class="embed-responsive embed-responsive-4by3">
         <iframe width="560" height="295"
             src="https://www.youtube.com/embed/46AcTcvNctw?rel=0&modestbranding=1&showinfo=1&enablejsapi=1&autoplay=0&html5=1"
             frameborder="0" allowfullscreen></iframe>
     </div>
     <div id="help" class="embed-responsive embed-responsive-4by3">
         <iframe width="560" height="295"
             src="https://www.youtube.com/embed/8nUTBaVXEz0?rel=0&modestbranding=1&showinfo=1&enablejsapi=1&autoplay=0&html5=1"
             frameborder="0" allowfullscreen></iframe>
     </div>

     <div class="row mt-5 mb-5 justify-content-center">
         <div class="col-md-4">
             <div class="card " style="width: 18rem;">
                 <span style="font-size: 48px; color: Dodgerblue; padding:15px;">
                     <i class="fas fa-camera"></i>
                 </span>
                 <div class="card-body btn-primary "
                     style="width: 18rem;height:6rem;  border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                     <h4 class="card-text"><b>VIEW OUR PHOTOGRAHY</b>
                     </h4>
                 </div>
             </div>
         </div>
         <div class="col-md-4">

             <div class="card " style="width: 18rem;">
                 <span style="font-size: 48px; color: Dodgerblue;padding:15px;">
                     <i class="fas fa-film"></i>
                 </span>
                 <div class="card-body btn-primary "
                     style="width: 18rem;height:6rem;  border-bottom-left-radius: 10px;border-bottom-right-radius: 10px">
                     <h4 class="card-text"><b>VIEW OUR TOUR</b>
                     </h4>
                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <a href="{{ route('virtual-staging') }}">
                 <div class="card " style="width: 18rem;">
                     <span style="font-size: 48px; color: Dodgerblue;padding:15px;">
                         <i class="fas fa-cubes"></i>
                     </span>
                     <div class="card-body btn-primary "
                         style="width: 18rem;height:6rem;  border-bottom-left-radius: 10px;border-bottom-right-radius: 10px">
                         <h4 class="card-text"><b>VIRTUAL STAGING</b>
                         </h4>
                     </div>
                 </div>
             </a>
         </div>
     </div>
 </div>
 </div>
 @endsection
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0"
     nonce="aKOXkgvj">
     </script>
 <script>
$(document).ready(function() {
    $('#testimonial').show();
    $('#about').hide();
    $('#products').hide();
    $('#help').hide();
    $('#btnproducts').click(function() {
        $('#products').show();
    });
});
 </script>