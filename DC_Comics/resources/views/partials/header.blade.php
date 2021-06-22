<header class="container">
    <img src="{{asset('img/dc-logo.png')}}" alt="Logo">
    <nav>
        <ul>
            <li>
              <a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            </li>
            <li>
              <a href="{{ route('comic') }}" class="{{ (request()->is('comic')) ? 'active' : '' }}">Comics</a>
            </li>
            <li>
              <a href="{{ route('movies') }}" class="{{ (request()->is('movies')) ? 'active' : '' }}">Movies</a>
            </li>
            <li>
              <a href="{{ route('tv') }}" class="{{ (request()->is('tv')) ? 'active' : '' }}">TV</a>
            </li>
            <li>
              <a href="{{ route('games') }}"  class="{{ (request()->is('games')) ? 'active' : '' }}">Games</a>
            </li>
            <li>
              <a href="{{ route('collectibles') }}" class="{{ (request()->is('collectibles')) ? 'active' : '' }}">Collectibles</a>
            </li>
            <li>
              <a href="{{ route('videos') }}"  class="{{ (request()->is('videos')) ? 'active' : '' }}">Videos</a>
            </li>
            <li>
              <a href="{{ route('fans') }}"  class="{{ (request()->is('fans')) ? 'active' : '' }}">Fans</a>
            </li>
            <li>
              <a href="{{ route('news') }}" class="{{ (request()->is('news')) ? 'active' : '' }}">News</a>
            </li>
            <li>
              <a href="{{ route('shop') }}" class="{{ (request()->is('shop')) ? 'active' : '' }}">Shop</a>
            </li>
      </ul>
    </nav>
  </header>