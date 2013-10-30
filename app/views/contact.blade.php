@extends('layout')

@section('content')
  <h1>Contact Us.</h1>
  <p>For any inquiries, please send us a message using the form below:</p>

  {{ HTML::ul($errors->all(), array('class'=>'errors'))}}

  {{ Form::open(); }}
  {{ Form::label('subject')}}
  {{ Form::text('subject'); }}
  {{ Form::label('message')}}
  {{ Form::textarea('message'); }}
  {{ Form::submit(); }}
  {{ Form::close(); }}

@endsection