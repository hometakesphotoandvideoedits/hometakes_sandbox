@extends('layouts.layout')

@section('content')

<div style="margin-top:100px;">
    <div class="container " style="margin-bottom:200px;">
        <div class="m-2 card" style="">
            <div class="card-body">
                <a class="navbar-brand" href="#"><img src="https://www.hometakesvideos.com/orders/img/logo.png"
                        style="width:170px;height:27px;" alt=""></a>
                <h3><b>Create your Hometakes Account</b></h3>
                <div class="row mt-1">
                    <div class="col-md-6">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-user"></i></i></span>
                                    <input type="text" class="form-control" placeholder="Firstname"
                                        aria-label="Firstname" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-user"></i></i></span>
                                    <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    <input type="text" class="form-control" placeholder="Create a password"
                                        aria-label="password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    <input type="text" class="form-control" placeholder="Confirm password"
                                        aria-label="Confirmpassword" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-id-badge"></i></span>
                                    <input type="text" class="form-control" placeholder="MLS Agent ID"
                                        aria-label="MLS-Agent-ID" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-info"></i></span>
                                    <input type="text" class="form-control" placeholder="Credentials"
                                        aria-label="credentials" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Agent Email" aria-label="agent-email"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                            <input type="text" class="form-control" placeholder="Agent Cell Carrier"
                                aria-label="credentials" aria-describedby="basic-addon1">
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-phone-alt"></i></span>
                                    <input type="text" class="form-control" placeholder="Agent Cell"
                                        aria-label="agent-cell" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-phone-alt"></i></span>
                                    <input type="text" class="form-control" placeholder="Assistants Cell (if any)"
                                        aria-label="assistants-cell" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="www.yourwebsite.com"
                                aria-label="website" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
                            <input type="text" class="form-control" placeholder="www.yourwebsite.com"
                                aria-label="website" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control" placeholder="Billing Address"
                                aria-label="billing-address" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fas fa-university"></i></i></span>
                            <input type="text" class="form-control" placeholder="City" aria-label="city"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="Select One"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
                            <input type="text" class="form-control" placeholder="Zip Code" aria-label="zipcode"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="card  mb-2">
                            <div class="card-body ">
                                <span style="font-size: 130px; "> <i class="far fa-user-circle"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary my-2 my-sm-0 mb-2" type="submit">Agent Photo</button>
                        <div class="card mb-2 mt-2">
                        <div class="card-body ">
                                <span style="font-size: 130px; "> <i class="far fa-image"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Company Logo</button>

                        <form action="?" method="POST">
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <br />
                        </form>
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Create Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        var audio = document.getElementById('audio');
        audio.src = 'music/' + document.getElementById('jazzMusic').getAttribute('data-value');
        audio.load();
        // var jazzMusic = $("input[name='jazzMusic']").val();
        // alert("Burce is here: " + $("#jazzMusic").val());
        // console.log("Burce is here: " + $("#jazzMusic").val())
    });
    </script>

    @endsection