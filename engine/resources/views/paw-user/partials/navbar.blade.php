<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('pawcare.home')}}"><span class="flaticon-pawprint-1 mr-2"></span>Paw Care</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('pawcare.home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('pawcare.about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('pawcare.service')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('pawcare.contact')}}" class="nav-link">Contact</a></li>
                @if (!empty(auth()->user()->name) && auth()->user()->level=="admin")
                <li class="nav-item"><a href="{{route('pawcare.admindash')}}" class="nav-link">Admin</a></li>
                @endif
                @if (!empty(auth()->user()->name))
                <li class="nav-item"><a href="{{route('pawcare.logout')}}" class="nav-link"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (!empty(auth()->user()->name))
                <li class="nav-item">
                    @if (empty(auth()->user()->foto))
                    <div class="d-flex align-items-center">
                        <img src="images/userprofilepic/random.jpg" alt="User" class="user-avatar mr-2">
                        <span class="user-name">{{auth()->user()->name}}</span>
                    </div>
                    @endif
                    @if (!empty(auth()->user()->foto))
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/userprofilepic/' . auth()->user()->foto) }}" alt="User" class="user-avatar">
                        <span class="user-name">{{auth()->user()->name}}</span>
                    @endif
                </li>
                @endif
                @if (empty(auth()->user()->name))
                <li class="nav-item"><a href="{{ route('pawcare.login') }}" class="login-btn">Sign In</a></li>
                <li class="nav-item"><a href="{{ route('pawcare.register') }}" class="register-btn">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>