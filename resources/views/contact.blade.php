@extends('layouts.app')

@section('content')
<h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="well">
        <div class="form-group">
            {{Form::label('date', 'Start stay')}}
            {{Form::text('start_date', '', ['class' => 'date form-control', 'placeholder' => 'Enter arrival'])}}
        </div>
        <div class="form-group">
            {{Form::label('date', 'End stay')}}
            {{Form::text('end_date', '', ['class' => 'date form-control', 'placeholder' => 'Enter departure'])}}
        </div>
    </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
        </div>

        <div class="form-group">
            {{Form::label('phonenr', 'PhoneNr')}}
            {{Form::number('phonenr', '', ['class' => 'form-control', 'placeholder' => 'Enter phone number'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'More about you')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your skills and story'])}}
        </div>

        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}



@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar from the home page. We can use this little mechanic
    with parent and show to have diff sidebars through the website.
</p>
@endsection

