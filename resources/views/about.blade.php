@extends('layouts.app')

@section('content')
<h1>About</h1>


@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar from the home page. We can use this little mechanic
    with parent and show to have diff sidebars through the website.
</p>
@endsection