@extends('layouts.app')

@section('content')
<h1>Messages</h1>
@if(count($messages) > 0)
    @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">Name: {{$message->email}}</li>
            <li class="list-group-item">Phonenr: {{$message->phonenr}}</li>
            <li class="list-group-item">Message: {{$message->message}}</li>
        </ul>
    @endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar from the home page. We can use this little mechanic
    with parent and show to have diff sidebars through the website.
</p>
@endsection