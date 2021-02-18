@extends('main.index')

@section('css')
<style>
   .erclr{
        color:#FF0000;
    }
    .desclr{
        color: #787878;
        font-size:8pt;
    }
    .pad0{
        padding:0;
    }
    .frm{
        color:#007BFF; 
        font-size:8pt;
    }
    .tlstp{
        color:#007BFF;
        cursor:pointer
    }
    .cap{
        word-break: break-word;
        line-height: 100%;
        margin: 1%;
    }
    .host{
        font-weight: bold;
        font-size: 13pt;
    }
    .form-controltotal {
        /* display: block; */
        width: auto; 
        height: calc(1.5em + .75rem + 15px);
        padding: .375rem .75rem;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        text-align: center;
    }
    .agrees{
        margin: 0% 0% 0% 2%;
        font-size: 10pt;
    }
    .aftnxt{
        text-align: center;
        margin: 2%;
    }
    .marbot{
        margin-bottom:1%;
    }
    label{
        margin-top: 1%;
    }
    .padtp{
        padding-top: 3%;
    }
</style>
@endsection

@section('content')
<h2 class="clr">Choose your tour package & options</h2>
<div class="container">
    <div class="row">

        <div class="accordion" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link pad0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Premier package</button>
                        <span class="erclr pull-right">$599</span>
                        <br>
                        <span class="desclr">Customized Video Tour + Unlimited Photos + Aerial Photos and Video + 3D Tour + Floor Plan</span> 
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body" style="margin:10px;">
                        <div class="row">
                            <div class="col-md-6"> 
                                <b>Premier package video tour example:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample1.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"> 
                                <b>3D Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample2.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made and processed as a separate tour. -----Chrome browser may not be fully supported when viewing the tour------.">
                                    → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage">
                                </div>
                               
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-4">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            {{-- table --}}
                            <div class="col-md-12" >
                                <table style="width: 100%;">
                                    <tr>
                                        <td>
                                            <li>3D Tour (Guest House not included).</li>
                                        </td>
                                        <td>
                                            <li>60 Days of 3D Tour Hosting.</li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Floor Plan.</li>
                                        </td>
                                        <td>
                                            <li>6 Aerial Photos.</li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Unlimited Photos and Videos.</li>
                                        </td>
                                        <td>
                                            <li>6 Twilight Enhanced Photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(see here)</a>.</li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Aerial Video footage.</li>
                                        </td>
                                        <td>
                                            <li>Copy of Original Video file.</li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Produced exclusively with an electric slider for a more customized look.</li>
                                        </td>
                                        <td>
                                            <li>Up to a 3 hour on-site appointment with the videographer.</li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Sound effects are added to exterior scenes such as wildlife and water feature effects.</li>
                                        </td>
                                        <td>
                                            <li>Edited with hard cut transitions which are synced to the beat of the music.</li>
                                        </td>
                                      
                                    </tr>
                                    <tr>
                                        <td>
                                            <li>Video length between 3 to 4 minutes.</li>
                                        </td>
                                    </tr>
                                  
                                </table>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="branding" name="branding" value="">
                                <label for="branding">Removal of 'Hometakes' branding on your Tour <span class="erclr">$19</span> </label>
                            </div>    
                            <div class="col-md-6">
                                <input type="checkbox" id="genuine" name="genuine" value="">
                                <label for="genuine">Genuine Twilight photography <span class="erclr">$175 </span> <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(see sample)</a> </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php">policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle " data-toggle="collapse" data-parent="#accordionnes1" href="#collapseInner1">Next</button>
                                    </div>
                                </center>
                            </div>
                        
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes1">
                            <div class="accordion-group">
                                <div id="collapseInner1" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                       
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Showcase package
                        </button>
                        <span class="erclr pull-right">$449</span>
                        <br>
                        <span class="desclr">20 video scenes + Unlimited Photos + 3D Tour</span>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body" style="margin:10px;">
                       <div class="row">
                            <div class="col-md-6"> 
                                <b>Showcase package video tour example:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample1.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"> 
                                <b>3D Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample2.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                    → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage">
                                </div>
                               
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6" >
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                    
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                    
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> 5 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$60</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php">policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes2" href="#collapseInner2">
                                            Next
                                            {{-- <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Sign in</button> --}}
                                        </button>
                                    </div>
                                </center> 
                            </div>
                       </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes2">
                            <div class="accordion-group">
                                <div id="collapseInner2" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
            
                    </div>
            
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Flythrough Unlimited package
                        </button>
                        <span class="erclr pull-right">$349</span>
                        <br>
                        <span class="desclr">15 video scenes + Unlimited HDR Photos</span>
                        
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body" style="margin:10px;">
                        <div class="row">
                            <div class="col-md-6"> 
                                <b>Video Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample1.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"> 
                                <b>3D Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample2.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                    → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="branding" name="branding" value="" checked>
                                <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49">
                                </div>
                            
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                    
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                    
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> 4 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$50</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php">policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes3" href="#collapseInner3">
                                            Next
                                            {{-- <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Sign in</button> --}}
                                        </button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes3">
                            <div class="accordion-group">
                                <div id="collapseInner3" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Flythrough 20 package
                        </button>
                        <span class="erclr pull-right">$349</span>
                        <br>
                        <span class="desclr">12 video scenes + 20 HDR Photos</span>
                    </h5>
                </div>
            
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <b>Video Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample1.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"> 
                                <b>3D Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample2.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                    → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="branding" name="branding" value="" checked>
                                <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49">
                                </div>
                            
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                    
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                    
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$40</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes4" href="#collapseInner4">
                                            Next
                                            {{-- <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Sign in</button> --}}
                                        </button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes4">
                            <div class="accordion-group">
                                <div id="collapseInner4" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Flythrough 13 package
                        </button>
                        <span class="erclr pull-right">$199</span>
                        <br>
                        <span class="desclr">8 video scenes + 13 HDR Photos</span>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <b>Video Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample1.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"> 
                                <b>3D Tour Sample:</b>
                                <video width="auto" height="240" controls>
                                    <source src="videos/sample2.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                    → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="branding" name="branding" value="" checked>
                                <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49">
                                </div>
                            
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                    
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                    
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$40</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes5" href="#collapseInner5">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes5">
                            <div class="accordion-group">
                                <div id="collapseInner5" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Unlimited Photos
                        </button>
                        <span class="erclr pull-right">$175</span>
                        <br>
                        <span class="desclr">Unlimited HDR Photos (Amenity Photos not included)</span>  
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row"> 
                            <b>Frameless Photo Tour:</b>
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample1.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-12"> <b> Photo Only Options: </b></div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$40</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="branding" name="branding" value="" checked>
                                <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                            </div>
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample2.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                 <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                     → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-12">
                                <label for="branding">3D Tour option:</label>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49">
                                </div>
                            
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes7" href="#collapseInner7">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes7">
                            <div class="accordion-group">
                                <div id="collapseInner7" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                        
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Video Only
                        </button>
                        <span class="erclr pull-right">$175</span>
                        <br>
                        <span class="desclr">10 Video Scenes</span>  
                    </h5>
                </div>
            
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample1.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <b>Video Only Options:</b>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Additional Video Scene (includes photo) ea.
                                    <span class="erclr">$25</span>
                                </label>
                                <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="No. of Video Scenes" >
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #FFF"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes7" href="#collapseInner7">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes7">
                            <div class="accordion-group">
                                <div id="collapseInner7" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
            
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo22">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
                            Aerials Only
                        </button>
                        <span class="erclr pull-right">$149</span>
                        <br>
                        <span class="desclr">6 Aerial photos</span>  
                    </h5>
                </div>
                <div id="collapseTwo22" class="collapse" aria-labelledby="headingTwo22" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Aerial Photos include the following:</b>
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <b> Aerial Only Options:</b>
                            </div>
                             {{-- default check --}}
                             <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #FFF"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes8" href="#collapseInner8">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes8">
                            <div class="accordion-group">
                                <div id="collapseInner8" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree33">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                            Video Only
                        </button>
                        <span class="erclr pull-right">$145</span>
                        <br>
                        <span class="desclr">8 Video Scenes</span>  
                    </h5>
                </div>
                <div id="collapseThree33" class="collapse" aria-labelledby="headingThree33" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample1.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <b>Video Only Options:</b>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                    Send me the original video file when its ready  <span class="erclr">$10</span>
                                <br>
                                <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$175</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Additional Video Scene (includes photo) ea.
                                    <span class="erclr">$25</span>
                                </label>
                                <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="No. of Video Scenes" >
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #FFF"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes9" href="#collapseInner9">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes9">
                            <div class="accordion-group">
                                <div id="collapseInner9" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingTen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            Photos Only
                        </button>
                        <span class="erclr pull-right">$129</span>
                        <br>
                        <span class="desclr">8 HDR Photos</span>  
                    </h5>
                </div>
            
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <b>Photo Slideshow:</b>
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample1.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <b>Photo Only Options:</b>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike" checked>
                                <label for="cance"> Cancelation Insurance 
                                    <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                        (What's this?)
                                    </span>
                                    <span class="erclr">$5</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike" checked>
                                <label for="Plan"> 1 Twilight Enhancement Photo <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                    <span class="erclr">$20</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="Plan" name="Plan" value="Bike">
                                <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #FFF"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes10" href="#collapseInner10">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes10">
                            <div class="accordion-group">
                                <div id="collapseInner10" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEleven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            3D Tour - Click [  ] on sample below
                        </button>
                        <span class="erclr pull-right"><span class="frm">(from)</span> $199</span>
                        <br>
                        <span class="desclr">Please note: 3D Tours added as an option to any of the above packages are deeply discounted <br> with a minimum of 50% off of the price than if ordered here separately</span>  
                    </h5>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12"> 
                                <center>
                                    <video width="auto" height="auto" controls>
                                        <source src="videos/sample2.mov" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                 <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                     → Read these important 3D Tour Limitations
                                </p>
                                <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                    → Floor plan Limitations </p>
                                <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                            </div>
                            <div class="col-md-12">
                                <b>3D Tour option:</b>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" id="cance" name="cance" value="Bike">
                                <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                    <span class="erclr">$19</span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                <div class="col-md-6">
                                    <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49">
                                </div>
                            
                                <div class="cap">
                                    <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                </div> 
                                <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                            </div>
                            {{-- default check --}}
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="90days" name="90days" value="" checked>
                                <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="180days" name="180days" value="Bike">
                                <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="checkbox" id="360days" name="360days" value="Bike">
                                <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="border-top: 1px solid #DCDCDC"></p>
                                <center>
                                    <label for="total">Total:</label>
                                    <input type="text" id="total1" class="form-controltotal" name="total1" placeholder="$199" readonly>
                                    <br>
                                    <div class="agrees">
                                        <input type="checkbox" id="90days" name="90days" value="">
                                        <label for="90days">I agree to the <a href="https://www.hometakesvideos.com/orders/tos.php" >policies and conditions</a> </label>
                                        <br>
                                        <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes11" href="#collapseInner11">Next</button>
                                    </div>
                                </center> 
                            </div>
                        </div>
                        {{-- Here we insert another nested accordion --}}
                        <div class="accordion" id="accordionnes11">
                            <div class="accordion-group">
                                <div id="collapseInner11" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="mlsnum">MLS Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="address">Address to be filmed:</label>
                                                <input type="text" id="address" class="form-control" name="address" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mlsnum">Unit Number:</label>
                                                <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" class="form-control" name="city" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="place">Place</label>
                                                <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="zipc">Zip Code</label>
                                                <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                            </div>
                                            <div class="col-md-6 col-md-offset-6">
                                                <label for="zipc">Does the community have a name?</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Music for video tour:</b> 
                                            </div> 
                                            <div class="col-md-4 marbot" >
                                                {{-- <label for="zipc">Does</label> --}}
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Happy</option>
                                                    <option value="">Happy Mandolin</option>
                                                    <option value="">Blue Skies</option>
                                                    <option value="">How it began</option>
                                                    <option value="">Payday</option>
                                                    <option value="">Locally Sourced</option>
                                                    <option value="">Indie Romance</option>
                                                    <option value="">Jazz In Paris</option>
                                                    <option value="">The Engagement</option>
                                                    <option value="">Swamp Stomp</option>
                                                    <option value="">Venice Beach</option>
                                                    <option value="">The Creek</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                    <option value="">Must Be Something</option>
                                                    <option value="">Get Back</option>
                                                    <option value="">Fortaleza</option>
                                                    <option value="">Blakey's Burnout</option>
                                                    <option value="">Confessin</option>
                                                    <option value="">Raindrops</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 marbot">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Classical</option>
                                                    <option value="">Blue Danube by Strauss</option>
                                                    <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                    <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                    <option value="">Les Toreadors from Carmen by Bizet</option>
                                                    <option value="">Messiah by Handel</option>
                                                    <option value="">Morning Mood</option>
                                                    <option value="">Moonlight Sonata by Beethoven</option>
                                                    <option value="">Habanera by Bizet</option>
                                                    <option value="">Far Behind</option>
                                                    <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                    <option value="">Ride of the Valkyries by Wagner</option>
                                                    <option value="">Symphony No 5 by Beethoven</option>
                                                    <option value="">Fur Elise by Beethoven</option>
                                                    <option value="">William Tell Overture by Rossini</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Upbeat</option>
                                                    <option value="">Dont Hate Me (vocals)</option>
                                                    <option value="">The Place Inside</option>
                                                    <option value="">How About It</option>
                                                    <option value="">Switch It Up</option>
                                                    <option value="">Rubber Necking</option>
                                                    <option value="">Cimson Fly</option>
                                                    <option value="">Gotta Find Out</option>
                                                    <option value="">Boo Boogie</option>
                                                    <option value="">Festival</option>
                                                    <option value="">Magic Marker</option>
                                                    <option value="">Runaways</option>
                                                    <option value="">Reasons To Smile</option>
                                                    <option value="">Golden Days</option>
                                                    <option value="">First Day</option>
                                                    <option value="">Stalling</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Mello</option>
                                                    <option value="">Hey Girl</option>
                                                    <option value="">Let's Do It</option>
                                                    <option value="">Sweet as Honey</option>
                                                    <option value="">Chances Sax</option>
                                                    <option value="">Until We Meet Again</option>
                                                    <option value="">Keep Dreaming</option>
                                                    <option value="">Don't Look</option>
                                                    <option value="">Where I Am From</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select  class="form-control" name="" id="">
                                                    <option value="" disabled selected hidden>Select Piano</option>
                                                    <option value="">Sunday Stroll</option>
                                                    <option value="">Keith</option>
                                                    <option value="">Tonto</option>
                                                    <option value="">Clouds</option>
                                                    <option value="">Getting There</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>Addition Property Information:</b> 
                                            </div> 
                                            <div class="col-md-3">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="baths">Full Baths:</label>
                                                <input type="text" id="baths" class="form-control" name="baths" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sqfeet">Square Feet:</label>
                                                <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="price">Price:</label>
                                                <input type="text" id="price" class="form-control" name="price" value="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="hbaths">Half Baths:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Title:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12">
                                                <label for="hbaths">Property Description:</label>
                                                <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                            </div>
                                            <div class="col-md-12 aftnxt">
                                                <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                            </div> 
                                            <div class="col-md-12">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">Schedule Later </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 1: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 2: </label>
                                                <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 2: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Date 3: </label>
                                                <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Time 3: </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="90days">Final Date and Time : </label>
                                                <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                            </div>
                                            <div class="col-md-12 padtp">
                                                <center>
                                                    <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        {{-- Inner accordion ends here --}}
                    </div>
                </div>
            </div>
            
        </div>
  
          
    </div>
</div>
@endsection

@section('script')
<script>
// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("#danhide").hide();
//     $("#danshow").show();
//   });
//   $("#show").click(function(){
//     $("#danshow").hide();
//     $("#danhide").show();
//   });
// });
// $( function() {
//     $( "#datepicker" ).datepicker();
//     $( "#datepicker1" ).datepicker();
//     $( "#datepicker2" ).datepicker();
// } );

</script>
@endsection

