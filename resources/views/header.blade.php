<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

        <a class="navbar-brand" href="#">Luxury Gale</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>

                {{--                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>--}}
                {{--                <li class="nav-item"><a href="agent.html" class="nav-link">Agent</a></li>--}}
                {{--                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>--}}
                <li class="nav-item"><a href="{{route('house.list')}}" class="nav-link">Properties</a></li>
                {{--                <li class="nav-item"><p data-toggle="modal" data-target="#myModalRegister" class="nav-link btn">Register</p>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item"><p class="nav-link" data-toggle="modal" data-target="#myModal">Login</p></li>--}}
                <li class="nav-item">
                    @include('users.sidebar')
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('users.login')
@include('users.register')
@include('users.forgot-password')
@include('pick-day-modal')
@if(\Illuminate\Support\Facades\Auth::user())
    @include('users.change-password')
    @include('users.edit')
@endif
