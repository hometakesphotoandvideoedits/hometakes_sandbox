@extends('layouts.layout')

@section('content')

<div class="container mb-5">
    <h2 class="mt-2 card-title text-center" style="color:#3751FE">Video Music Collection</h2>
    <div class="align-items-center" style="text-center">
        <div class="m-1 card">
            <div class="card-body">
                <h2 class="mt-2 card-title text-center" style="color:#3751FE">MUSIC COLLECTION GALLARY</h2>

                <!-- <h5 class="card-title" style="color:#3751FE">HOW LONG WILL THE APPOINTMENT TAKE?</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text p-3">When you order a video tour from us, you'll be able to choose from two editing
                    styles; Modern or Classic. The music track for the Modern style edit is pre-chosen as it is edited
                    specifically to the beat of this music track (below). Modern Style video scenes are 'sped up' in
                    certain
                    areas of a scene/shot. This creates a 'fast forward' visual effect and also helps us edit the video
                    to
                    the beat of the music.
                </p>
                <p class="card-text p-3">
                    As Modern Style is our most popular video edit choice among our clients, it's the defaulted style
                    for
                    your order. If you don't like this style, please makes sure that you select the Classic Style as
                    there
                    is a $25 re-edit fee if you want to change the style after the video has been edited. If you change
                    your
                    edit selection to Classic Style, the Modern video sample disappears and music choices will appear.
                    Then
                    you will be able to select your music choice from multiple music tracks to go with your Classic
                    Style
                    video.
                </p>
                <div class="text-center">
                    <!-- <ul> -->
                    <div class="m-3" style="display:inline-block;">
                        <h2 class="mt-5 card-title text-center" style="color:#3751FE">MODERN STYLE VIDEO EDIT</h2>
                        <iframe src="https://player.vimeo.com/video/195969264" width="640" height="360" frameborder="0"
                            webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                    <div class="m-3" style="display:inline-block;">
                        <h2 class="ml-5 mt-5 card-title text-center" style="color:#3751FE">CLASSIC STYLE VIDEO EDIT</h2>
                        <iframe src="https://player.vimeo.com/video/196067628" width="640" height="360" frameborder="0"
                            webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

                    </div>
                    <!-- </ul> -->

                    <h4 class=" mt-1 card-title text-center" style="color:#3751FE">You can select your music track for
                        the
                        classic style video edit by clicking on the drop down menus.</h4>
                    <!-- 
                <div class="row">
                    <div class="col-md-4">
                        <h3 class=" mt-1 card-title text-center"><b>HAPPY</b></h3>
                        <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option selected>HAPPY</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class=" mt-1 card-title text-center"><b>HAPPY</b></h3>
                        <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option selected>HAPPY</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div> -->
                    <form name="form" action="" method="get">
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <h3 class=" mt-1 card-title text-center"><b>HAPPY</b></h3>
                                <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                                <div class="input-group mb-3">
                                    <select name="jazzMusic" class="custom-select" id="jazzMusic">
                                        <option value="">Happy</option>
                                        <option data-value="Happy01_HappyMandolin">1 Happy Mandolin</option>
                                        <option value="Happy02_BlueSkies">2 Blue Skies</option>
                                        <option value="Happy03_GetOutside">3 Get Outside</option>
                                        <option value="Happy04_HowitBegan">4 How it Began</option>
                                        <option value="Happy05_Payday">5 Payday</option>
                                        <option value="Happy06_LocallySourced">6 Locally Sourced</option>
                                        <option value="Happy07_IndieRomance">7 Indie Romance</option>
                                        <option value="Happy08_JazzInParis">8 Jazz In Paris</option>
                                        <option value="Happy09_TheEngagement">9 The Engagement</option>
                                        <option value="Happy10_SwampStomp">10 Swamp Stomp</option>
                                        <option value="Happy11_VeniceBeach">11 Venice Beach</option>
                                        <option value="Happy12_TheCreek">12 The Creek</option>
                                    </select>
                                </div>
                                <audio id="audio" controls="controls">
                                    <source id="audioSource" src="">
                                    </source>
                                    Your browser does not support the audio format.
                                </audio>
                            </div>
                            <div class="col-md-4">
                                <h3 class=" mt-1 card-title text-center"><b>COOL & JAZZY</b></h3>
                                <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                                <div class="input-group mb-3">
                                    <select name="SmoothJazzMusic" class="custom-select" id="SmoothJazzMusic">
                                        <option value="">Cool & Jazzy</option>
                                        <option value="CoolJazzy01_MustBeSomething">1 Must Be Something</option>
                                        <option value="CoolJazzy02_GetBack">2 Get Back</option>
                                        <option value="CoolJazzy03_Fortaleza">3 Fortaleza</option>
                                        <option value="CoolJazzy04_BlakeysBurnout">4 Blakey's Burnout</option>
                                        <option value="CoolJazzy05_Confessin">5 Confessin</option>
                                        <option value="CoolJazzy06_Raindrops">6 Raindrops</option>
                                    </select>
                                </div>
                                <audio id="audio" controls="controls">
                                    <source id="audioSource" src="">
                                    </source>
                                    Your browser does not support the audio format.
                                </audio>
                            </div>
                            <div class="col-md-4">
                                <h3 class=" mt-1 card-title text-center"><b>CLASSICAL</b></h3>
                                <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                                <div class="input-group mb-3">
                                    <select name="classicalMusic" class="custom-select" id="classicalMusic">
                                        <option value="">Classical</option>
                                        <option value="Classical01_BlueDanubebyStrauss">1 Blue Danube by Strauss
                                        </option>
                                        <option value="Classical02_EineKleineNachtmusikbyMozart">2 Eine Kleine
                                            Nachtmusik by
                                            Mozart</option>
                                        <option value="Classical03_WaltzoftheFlowersbyTchaikovsky">3 Waltz of the
                                            Flowers by
                                            Tchaikovsky</option>
                                        <option value="Classical04_LesToreadorsfromCarmenbyBizet">4 Les Toreadors from
                                            Carmen by
                                            Bizet</option>
                                        <option value="Classical05_MessiahbyHandel">5 Messiah by Handel</option>
                                        <option value="Classical07_MorningMood">7 Morning Mood</option>
                                        <option value="Classical08_MoonlightSonatabyBeethoven">8 Moonlight Sonata by
                                            Beethoven
                                        </option>
                                        <option value="Classical09_HabanerabyBizet">9 Habanera by Bizet</option>
                                        <option value="Classical10_FarBehind">10 Far Behind</option>
                                        <option value="Classical11_HungarianRhapsodyNo2byLiszt">11 Hungarian Rhapsody No
                                            2
                                            by
                                            Liszt</option>
                                        <option value="Classical12_RideoftheValkyriesbyWagner">12 Ride of the Valkyries
                                            by
                                            Wagner</option>
                                        <option value="Classical13_SymphonyNo5byBeethoven">13 Symphony No 5 by Beethoven
                                        </option>
                                        <option value="Classical14_FurElisebyBeethoven">14 Fur Elise by Beethoven
                                        </option>
                                        <option value="Classical15_WilliamTellOverturebyRossini">15 William Tell
                                            Overture by
                                            Rossini</option>
                                    </select>
                                </div>
                                <audio id="audio" controls="controls">
                                    <source id="audioSource" src="">
                                    </source>
                                    Your browser does not support the audio format.
                                </audio>
                            </div>

                        </div>
                    </form>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <h3 class=" mt-1 card-title text-center"><b>UPBEAT</b></h3>
                            <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                            <div class="input-group mb-3">
                                <select name="UpbeatMusic" class="custom-select" id="UpbeatMusic">
                                    <option value="">Upbeat</option>
                                    <option value="Upbeat01_DontHateMe(vocals)">1 Dont Hate Me (vocals)</option>
                                    <option value="Upbeat02_ThePlaceInside">2 The Place Inside</option>
                                    <option value="Upbeat03_HowAboutIt">3 How About It</option>
                                    <option value="Upbeat04_SwitchItUp">4 Switch It Up</option>
                                    <option value="Upbeat06_CrimsonFly">6 Crimson Fly</option>
                                    <option value="Upbeat07_GottaFindout">7 Gotta Find out</option>
                                    <option value="Upbeat05_RubberNecking">5 Rubber Necking</option>
                                    <option value="Upbeat08_BooBoogie">8 Boo Boogie</option>
                                    <option value="Upbeat09_Festival">9 Festival</option>
                                    <option value="Upbeat10_MagicMarker">10 Magic Marker</option>
                                    <option value="Upbeat11_Runaways">11 Runaways</option>
                                    <option value="Upbeat12_ReasonstoSmile">12 Reasons to Smile</option>
                                    <option value="Upbeat13_GoldenDays">13 Golden Days</option>
                                    <option value="Upbeat14_FirstDay">14 First Day</option>
                                    <option value="Upbeat15_Stalling">15 Stalling</option>
                                </select>
                            </div>
                            <audio id="audio" controls="controls">
                                <source id="audioSource" src="">
                                </source>
                                Your browser does not support the audio format.
                            </audio>
                        </div>
                        <div class="col-md-4">
                            <h3 class=" mt-1 card-title text-center"><b>MELLO</b></h3>
                            <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                            <div class="input-group mb-3">
                                <select name="MiscMixMusic" class="custom-select" id="MiscMixMusic">
                                    <option value="">Mello</option>
                                    <option value="Mello01_HeyGirl">1 Hey Girl</option>
                                    <option value="Mello02_LetsDoit">2 Lets Do it</option>
                                    <option value="Mello03_SweetasHoney">3 Sweet as Honey</option>
                                    <option value="Mello04_ChancesSax">4 Chances Sax</option>
                                    <option value="Mello05_UntilWeMeetAgain">5 Until We Meet Again</option>
                                    <option value="Mello06_KeepDreaming">6 Keep Dreaming</option>
                                    <option value="Mello07_DontLook">7 Dont Look</option>
                                    <option value="Mello08_WhereIamFrom">8 Where I am From</option>
                                </select>
                            </div>
                            <audio id="audio" controls="controls">
                                <source id="audioSource" src="">
                                </source>
                                Your browser does not support the audio format.
                            </audio>
                        </div>
                        <div class="col-md-4">
                            <h3 class=" mt-1 card-title text-center"><b>PIANO</b></h3>
                            <h5 class=" mt-1 card-title text-center"><b>SELECT TRACKS FROM THE LIST</b></h5>
                            <div class="input-group mb-3">
                                <select name="MiamiStyleMusic" class="custom-select" id="MiamiStyleMusic">
                                    <option value="">Piano</option>
                                    <option value="Piano01_SundayStroll">1 Sunday Stroll</option>
                                    <option value="Piano02_Keith">2 Keith</option>
                                    <option value="Piano03_Tonto">3 Tonto</option>
                                    <option value="Piano04_Clouds">4 Clouds</option>
                                    <option value="Piano05_GettingThere">5 Getting There</option>
                                </select>
                            </div>
                            <audio id="audio" controls="controls">
                                <source id="audioSource" src="">
                                </source>
                                Your browser does not support the audio format.
                            </audio>
                        </div>
                    </div>
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