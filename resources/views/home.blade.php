@extends('layouts.app')

@section('content')
<h1>Home</h1>
<div class="participation-graph">
    <canvas class="bars" data-color-all="#F5F5F5" data-color-owner="#F5F5F5" data-source="/mxcl/homebrew/graphs/owner_participation" height="80" width="640"></canvas>
 </div>
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar from the home page. We can use this little mechanic
    with parent and show to have diff sidebars through the website.
</p>
@endsection

