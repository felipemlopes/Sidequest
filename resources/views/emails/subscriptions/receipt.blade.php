@extends('emails.layout')

@section('title')
{{ $email_title or 'You have subscribed to a plan!' }}
@endsection

@section('content')
<p>You've succesfully signed up for a subscription. Oh you awesome you.</p>
@endsection