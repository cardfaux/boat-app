<header class="header">
  <div class="container">
    <a href="/" class="header__logo">
      Smith Marina
    </a>
    <div class="header__menu">
      <a href="/boatrentals" class="header__menu-link
        @if(request()->routeIs('frontlisting.index'))
          header__menu-link--active
        @endif">Listings</a>
      <a href="/listing/brakefield-marina-78-2064-lost-creek-rd--carbon-hill-al-35549/8" class="header__menu-link
        @if(request()->routeIs('frontlisting.show'))
          header__menu-link--active
        @endif">Property</a>
      <a href="/boatrentals/iii/sail%20boat/for_rent/al/carbon%20hill/35549?min_seats=1&max_seats=7&min_price=200&max_price=1000"
        class="header__menu-link">Filter</a>
    </div>
    <div class="header__account">


      @if (Route::has('login'))
      @auth
      <a href="{{route('account')}}" class="header__account-link"><i class="fa-solid fa-heart"></i></a>
      <a href="{{route('show-status')}}" class="header__account-link"><i class="fa-solid fa-user"></i></a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="header__account-link--anchor" href="{{ route('logout') }}"
          onclick="event.preventDefault();this.closest('form').submit();">Logout</a>

      </form>
      {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      --}}
      @else
      <a href="{{ route('login') }}" class="header__account-link--anchor">Login</a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="header__account-link--anchor">Register</a>
      @endif
      @endauth
      @endif
    </div>
  </div>
</header>
