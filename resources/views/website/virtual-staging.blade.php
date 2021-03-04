@extends('layouts.layout')

@section('content')
<style>
img {
    height: 650px;
    width: 1200px;
}
</style>
<div class="container mb-5">
    <div class="align-items-center" style="text-center">
        <div class="m-1 card">
            <div class="card-body">
                <h2 class="mt-2 card-title text-center" style="color:#3751FE">VIRTUAL STAGING</h2>

                <!-- <h5 class="card-title" style="color:#3751FE">HOW LONG WILL THE APPOINTMENT TAKE?</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text text-center pt-3 ">Sore back from moving all of the furniture around? Sick of your
                    spouse nagging
                    at you to move the same chair for the 100th time?
                </p>
                <p class="card-text text-center ">
                    Sell homes faster, save backs, and save marriages by using hometakes Virtual Staging.
                </p>
                <hr>
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="living-room-tab" data-bs-toggle="pill"
                            data-bs-target="#living-room" type="button" role="tab" aria-controls="living-room"
                            aria-selected="true">Living Room</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="family-room-tab" data-bs-toggle="pill"
                            data-bs-target="#family-room" type="button" role="tab" aria-controls="family-room"
                            aria-selected="false">Family Room</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dining-room-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#dining-room" type="button" role="tab" aria-controls="dining-room"
                            aria-selected="false">Dining Room</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="bedroom-tab" data-bs-toggle="pill" data-bs-target="#bedroom"
                            type="button" role="tab" aria-controls="bedroom" aria-selected="false">Bedroom</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="master-bedroom-tab" data-bs-toggle="pill"
                            data-bs-target="#master-bedroom" type="button" role="tab" aria-controls="master-bedroom"
                            aria-selected="false">Master Bedroom</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="patio-tab" data-bs-toggle="pill" data-bs-target="#patio"
                            type="button" role="tab" aria-controls="patio" aria-selected="false">Patio</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="office-tab" data-bs-toggle="pill" data-bs-target="#office"
                            type="button" role="tab" aria-controls="office" aria-selected="false">Office</button>
                    </li>
                </ul>
                <div class="tab-content mb-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="living-room" role="tabpanel"
                        aria-labelledby="living-room-tab">sadfsadf
                        <div id="carouselvirtualstaging" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselvirtualstaging" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselvirtualstaging" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="family-room" role="tabpanel" aria-labelledby="family-room-tab">
                        Family
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dining-room" role="tabpanel" aria-labelledby="dining-room-tab">
                        dining
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bedroom" role="tabpanel" aria-labelledby="bedroom-tab">
                        Bedroom
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="master-bedroom" role="tabpanel" aria-labelledby="pills-contact-tab">
                        master
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="patio" role="tabpanel" aria-labelledby="patiot-tab">
                        Patio
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                        Office
                        <div id="carouselvirtualstaging" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/grass01.jpg'>
                                        <img src='images/grass02.jpg'>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div id='container1' class='twentytwenty-container'>
                                        <img src='images/u.jpg'>
                                        <img src='images/u1.jpg'>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="btn-toolbar justify-content-center " role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" data-bs-target="#carouselvirtualstaging" data-bs-slide-to="0" class="btn btn-primary">1</button>
                        <button type="button" data-bs-target="#carouselvirtualstaging" data-bs-slide-to="1" class="btn btn-primary">2</button>
                        <button type="button" data-bs-target="#carouselvirtualstaging" data-bs-slide-to="2" class="btn btn-primary">3</button>
                        <button type="button" data-bs-target="#carouselvirtualstaging" data-bs-slide-to="3" class="btn btn-primary">4</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/js/jquery.event.move.js"></script>
<script src="js/js/jquery.twentytwenty.js"></script>
<script>
$(document).ready(function() {
    function carousel() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.7
        });
    };
    carousel();
    $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
        default_offset_pct: 0.7
    });
});
</script>


@endsection