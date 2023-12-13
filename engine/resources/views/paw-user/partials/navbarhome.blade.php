<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('pawcare.dash')}}">Paw Care</a>
    <div class="search-box">
        <!-- Pinterest-like Search Bar -->
        <form class="form-inline">
            <input class="search-input form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <img src="https://img.icons8.com/ios/452/search--v1.png" alt="Search Icon" class="search-icon">
        </form>
    </div>
    <div class="navbar-btns">
        @if (!empty(auth()->user()->name) && auth()->user()->level=="admin")
        <button class="btn btn-secondary" onclick="location.href=`{{route('pawcare.admindash')}}`">
            Admin
        </button>
        @endif
        <button class="btn btn-primary" onclick="location.href=`{{route('pawcare.activity')}}`">
            <i class="material-icons">assignment</i> My Activity
        </button>
        @if (empty(auth()->user()->foto))
        <button class="btn btn-secondary" onclick="location.href=`{{route('pawcare.myprofile')}}`">
            <img src="images/userprofilepic/random.jpg" alt="User Profile" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;"> {{auth()->user()->name}}
        </button>
        @endif
        @if (!empty(auth()->user()->foto))
        <button class="btn btn-secondary" onclick="location.href=`{{route('pawcare.myprofile')}}`">
            <img src="{{ asset('images/userprofilepic/' . auth()->user()->foto) }}" alt="User Profile" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;"> {{auth()->user()->name}}
        </button>
        @endif
        <button class="btn btn-secondary" onclick="location.href=`{{route('pawcare.logout')}}`">
            <i class="material-icons">exit_to_app</i> Logout
        </button>
    </div>
</nav>