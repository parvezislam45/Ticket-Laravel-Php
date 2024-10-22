<div>
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        @auth
    @if (Auth::user()->role === 'user')
        <li><a href="{{ route('buy') }}" wire:navigate>Purchase Now</a></li>
    @endif
@endauth
      </ul>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{route('home')}}" wire:navigate>Online Ticket Service</a></li>
      @auth
    @if (Auth::user()->role === 'user')
        <li><a href="{{ route('buy') }}" wire:navigate>Purchase Now</a></li>
    @endif
@endauth
    </ul>
  </div>
  <div class="navbar-end">
    <div class="flex items-center gap-10">
    @guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@endguest
    </div>
    @auth
    <div class="flex-none gap-2">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://cdn-icons-png.flaticon.com/512/219/219986.png" />
        </div>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
        @if (Auth::user()->role === 'user')
        <li><a href="{{ route('buy') }}" wire:navigate>Purchase Now</a></li>
    @endif
    </form>
@endauth
      </ul>
    </div>
  </div>
    
  </div>
</div>
</div>