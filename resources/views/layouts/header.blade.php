
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"><img src="images/logo.png"
                style="width:200px;height:32px;" alt=""></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="navtab nav-item active">
                <a class="nav-link" href="{{url('/websitehome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="navtab nav-item active">
                <!-- <a href = "{{url('/admin/showCourses')}}" class="btn btn-primary ">View List</a><br> -->
                <a class="nav-link" href="{{url('/faq')}}">FAQ's <span class="sr-only">(current)</span></a>
            </li>
            <li class="navtab nav-item active">
                <a class="nav-link" href="{{url('/support-desk')}}">Support Tickets/Questions? <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="navtab nav-item active">
                <a class="nav-link" href="{{url('/oclp')}}">Our Customers Loyalty Program <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="navtab nav-item active">
                <a class="nav-link" href="{{url('/vmc')}}">Video Music Collection <span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <a href="{{ route('sign-in') }}" class="btn btn-xs btn-primary pull-right mr-2">Sign in</a>
        <a href="{{ route('sign-up') }}" class="btn btn-xs btn-outline-primary pull-right">Sign up</a>
    </div>
</nav>

