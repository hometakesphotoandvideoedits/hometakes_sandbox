@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="mt-5 card-title text-center" style="color:#3751FE;">FAQ's</h2>
    <input type="text" name="searchfaq" id="searchfaq" placeholder="Enter one keyword to find questions and answers on the subject." class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">

    <p class="card-text">Can't find your answer? <a href>submit a ticket</a> </p>
    </p>
    <div class="align-items-center" >
    @foreach($faqlist as $faq)
        <div class="m-1 card" style="margin-top:50px;">
            <div class="card-body">
                <h5 class="card-title" style="color:#3751FE">{{$faq['title']}}</h5>
                <p class="card-text">{{$faq['description']}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection