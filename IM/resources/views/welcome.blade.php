@extends('layouts.app')
    @section('content')
        <div class="title m-b-md">
            <p class="capture">"How <span class="yellow"> you  </span>can <span class="underline">learn coding</span> <span class="yellow">fast </span>and get a <span class="yellow">job</span> the most efficient way.</p>
            <p class="email-p">Add Your Email Address Below</p>
            <div class="form-container">
                {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                @method('GET')
                <div class="form-group">
                    {{Form::text('email', '', ['placeholder' =>'Enter Your Best E-mail Here'])}}
                </div>
                {{Form::submit('Get Instant Access Now!', ['class' => 'btn btn-primary'])}}
                {!! Form::close()!!}
                </div>
        </div>
        <div class="small">The training will be sent to the email you submitted.</div>
        <br>
        <div class="terms-container">
            <div class="terms1"><a href="#">Terms & Conditions</a></div>
            <div class="terms2"><a href="#">Privacy Policy</a></div>
            <div class="terms3"><a href="#">Earnings Disclaimer</a></div>
        </div>
        <br>
        <div class="copy">Copyright 2020 - ZeroToHeroWebApps, All Rights Reserved</div>
    @endsection
                
            
