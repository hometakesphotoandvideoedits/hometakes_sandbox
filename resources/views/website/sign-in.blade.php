@extends('layouts.layout')

@section('content')
<div class="login" style="margin-top:200px;margin-bottom:430px;">
    <div class="mt-2 mr-5 ml-5 card text-center">
        <div class="card-body">
            <a class="navbar-brand" href="#"><img src="https://www.hometakesvideos.com/orders/img/logo.png"
                    style="width:200px;height:32px;" alt=""></a>
            <h5><b>Sign in</b></h5>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter Username" aria-label="username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                <input type="text" class="form-control" placeholder="Enter Password" aria-label="password"
                    aria-describedby="basic-addon1">
            </div>
                <button class="btn btn-primary  my-sm-0 mx-auto mb-2" type="button">Sign in</button>
                <p class="card-text mt-2"><a href="">Forgot password</a><br>OR call us at 561-623-9433</p>
        </div>
    </div>
</div>
<script>
</script>
@endsection