@include('inc.header')

@include('inc.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
          @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
                
            </div>
            {{-- <div class="col-md-4 col-lg-4">
                    @include('inc.cards')
                    
                </div> --}}
        </div>
    </div>

@include('inc.footer')