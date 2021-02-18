<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hometakes') }}</title>


    <!-- jQueryUI -->
    <link href="{{ asset('css/jQueryUI/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template Sidebar-->
    <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
    <!-- Custom styles for Class and ID-->
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Datatable -->
    {{-- <link href="{{ asset('css/datatable/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/datatable/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/datatable/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('css/datatable/buttons.dataTables.min.css')}}" rel="stylesheet">
    <!-- Media Screen -->
    <link href="{{ asset('css/media.css')}}" rel="stylesheet">
    <!-- Chosen -->
    <link href="{{ asset('css/chosen/chosen.min.css')}}" rel="stylesheet">


    @yield('css')

    @php
      $user= Session::get('user');
    @endphp

  <style>
    .user-image{
      float: left;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      margin-right: 10px;
      margin-top: -2px;
    }
    .txt-white{
      color: #FFF;
    }
    .admns{
      text-align: center;
      font-size: 8pt;
      margin: -5% 12% 0 0;
      color: #787878;
    }
    .blue{
      color:#3379FF
    }
    .clr{
        color: #696969
    }


  </style>

</head>
<body>

    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      @if (Session::has('user_id'))
        <div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">
            <a href="{{asset('/dashboard')}}">
              <img src="images/logo.png" class="" alt="alt text" style=" width: 130px;">
            </a>
          </div>
          <div class="list-group list-group-flush">
            @if ($user->id_type==1)
              {{-- Admins view --}}
              <a href="{{asset('/dashboard')}}" class="list-group-item list-group-item-action"><i class="fa fa-tachometer blue"></i> Dashboard </a>
              <a href="{{asset('/pending_tours')}}" class="list-group-item list-group-item-action"><i class="fa fa-info-circle blue" aria-hidden="true"></i> </i> Pending Tours</a>
              <a href="{{asset('/completed_tours')}}" class="list-group-item list-group-item-action"><i class="fa fa-car blue" aria-hidden="true"></i> Completed Tours</a>
              <a href="{{asset('/users')}}" class="list-group-item list-group-item-action"><i class="fa fa-users blue" aria-hidden="true"></i> Users</a>
              <a href="{{asset('/pending_users')}}" class="list-group-item list-group-item-action"><i class="fa fa-user-times blue" aria-hidden="true"></i> Pending Users</a>
              <a href="{{asset('/town_tours')}}" class="list-group-item list-group-item-action"><i class="fa fa-university blue" aria-hidden="true"></i> Town Tours</a>
              <a href="{{asset('/amenities_tours')}}" class="list-group-item list-group-item-action"><i class="fa fa-building blue" aria-hidden="true"></i> Amenities Tours</a>
              <a href="{{asset('/sponsors')}}" class="list-group-item list-group-item-action"><i class="fa fa-user-circle-o blue" aria-hidden="true"></i> Sponsors</a>
              <a href="{{asset('/tour_licenses')}}" class="list-group-item list-group-item-action"><i class="fa fa-drivers-license blue" aria-hidden="true"></i> Tour Licenses</a>
              <a href="{{asset('/settings')}}" class="list-group-item list-group-item-action"><i class="fa fa-cog blue" aria-hidden="true"></i> Settings</a>
            
            @elseif($user->id_type==0)
           
              {{-- Users View --}}
              <a href="{{asset('/ordernow')}}" class="list-group-item list-group-item-action"><i class="fa fa-shopping-cart blue" aria-hidden="true"></i> Order Now</a>
              <a href="{{asset('/active_tours')}}" class="list-group-item list-group-item-action"><i class="fa fa-history blue" aria-hidden="true"></i> Active Tours</a>
              <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-info-circle blue" aria-hidden="true"></i> Pending Tours</a>
            @endif
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
      @endif

      <!-- Page Content -->
      <div id="page-content-wrapper">
        @if (Session::has('user_id'))
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn" id="menu-toggle"><i class="fa fa-bars"></i></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                {{-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if ($user->id_type==1)
                      <img src="images/adminimage.jpg" class="user-image">
                      {{$user->fname}} {{$user->lname}}
                    @elseif($user->id_type==0)
                      <img src="images/userimage.jpg" class="user-image">
                      {{$user->fname}} {{$user->lname}}
                    @endif
                  </a>
                  <div class="admns">
                    @if ($user->id_type==0)
                        USER
                    @elseif($user->id_type==1)
                        ADMIN
                    @endif
                  </div>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="{{asset('/edit_user')}}">Edit Profile</a>
                    <a class="dropdown-item" href="{{asset('/login')}}?logout=yes">Logout</a>
                  </div>
                </li>


              </ul>
            </div>

          </nav>
        @endif

        <div class="container-fluid">
          @yield('content')
        </div>

      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    {{-- <!-- jQuery core JavaScript --> --}}
    <script src="{{ asset('js/jQuery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jQueryUI/jquery-ui.min.js')}}"></script>
    {{-- <!-- Bootstrap core JavaScript --> --}}
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- Datatable -->
    <script src="{{ asset('js/datatable/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('js/datatable/dataTables.columnFilter.js')}}"></script>
    <script src="{{ asset('js/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('js/datatable/buttons.print.min.js')}}"></script>
    <script src="{{ asset('js/datatable/buttons.html5.min.js')}}"></script>
    <!-- Chosen -->
    <script src="{{ asset('js/chosen/chosen.jquery.min.js')}}"></script>

    <script>
       $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });


      function showpass() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>
    @yield('script')

</body>
</html>
