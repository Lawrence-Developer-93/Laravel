@extends('layouts.app')
    @section('content')
        <div class="title m-b-md">
            <p class="capture">Want to learn how to code? Enter your email, start leaning, and get that <span>$60,000/year job!</span></p>
            <p class="email-p">Add Your Email Address Below</p>
            {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                @method('GET')
            <div class="form-group">
                {{Form::text('email', 'Enter Your E-mail Here')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close()!!}
        </div>
        <div class="small">The information will be sent to the email you submitted.</div>
    @endsection
                
            
