<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ticket App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- ------------------------- Style ------------------- -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {

            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;

            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="antialiased">
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
    <ul class="menu menu-horizontal px-1 text-md font-bold">
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

        <swiper-container class="mySwiper mt-28" pagination="true" pagination-clickable="true" navigation="true"
            space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
            <swiper-slide>
                <div class="w-full bg-center bg-cover h-[38rem]"
                    style="background-image: url('https://plus.unsplash.com/premium_photo-1661506355501-a49f65dbd2e8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                        <div class="text-center">
                            <h1 class="text-3xl font-semibold text-white lg:text-4xl">We Are The Partner of <span
                                    class="text-blue-400">Your</span> Lovely Journey</h1>
                            <button
                                class="w-full px-5 py-2 mt-4 text-sm font-medium text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">See More</button>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="w-full bg-center bg-cover h-[38rem]"
                    style="background-image: url('https://images.unsplash.com/photo-1454496406107-dc34337da8d6?q=80&w=2200&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                        <div class="text-center">
                            <h1 class="text-3xl font-semibold text-white lg:text-4xl">Your Dream  <span
                                    class="text-blue-400">Flight</span> is There</h1>
                            <button
                                class="w-full px-5 py-2 mt-4 text-sm font-medium text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">See More</button>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="w-full bg-center bg-cover h-[38rem]"
                    style="background-image: url('https://images.unsplash.com/photo-1518206075495-4e901709d372?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                        <div class="text-center">
                            <h1 class="text-3xl font-semibold text-white lg:text-4xl">We Always Provide<span
                                    class="text-blue-400">Best</span>Service</h1>
                            <button
                                class="w-full px-5 py-2 mt-4 text-sm font-medium text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">See More</button>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>



        <div class=" mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl mt-32">
            <div class="grid gap-10 lg:grid-cols-2">
                <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full">
                        <svg class="text-teal-900 w-7 h-7" viewBox="0 0 24 24">
                            <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-miterlimit="10" points=" 8,5 8,1 16,1 16,5" stroke-linejoin="round"></polyline>
                            <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-miterlimit="10" points="9,15 1,15 1,5 23,5 23,15 15,15" stroke-linejoin="round">
                            </polyline>
                            <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-miterlimit="10" points="22,18 22,23 2,23 2,18" stroke-linejoin="round">
                            </polyline>
                            <rect x="9" y="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-miterlimit="10" width="6" height="4" stroke-linejoin="round"></rect>
                        </svg>
                    </div>
                    <div class="max-w-xl mb-6">
                        <h2
                            class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            Let us handle<br class="hidden md:block" />
                            your next
                            <span class="inline-block text-deep-purple-accent-400">destination</span>
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                        </p>
                    </div>
                    <div>
                        <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            Learn more
                            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                <path
                                    d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center -mx-4 lg:pl-8">
                    <div class="flex flex-col items-end px-3">
                        <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-60 w-28 sm:w-48 xl:w-72"
                            src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            alt="" />
                        <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-60 w-28 sm:w-48 xl:w-72 mt-10"
                            src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            alt="" />
                    </div>
                    <div class="px-10">
                        <img class="object-cover w-40 h-60 rounded shadow-lg sm:h-64 xl:h-96 sm:w-64 xl:w-96"
                            src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white dark:bg-gray-900 mt-10">
            <div class="container px-6 py-8 mx-auto">
                <div
                    class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2
                                class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Economy Class
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                            <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                                $ 600.55 
                            </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                                Free Snacks
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Free Lounch
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Free Drinks
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            <a href="{{route('buy')}}" wire:navigate>Book Now</a>
                        </button>
                    </div>

                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2
                                class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Business Class
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                            <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                                $800.90
                            </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                                Free Snacks
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Free Lounch
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Free Drinks
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited Tea
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            <a href="{{route('buy')}}" wire:navigate>Book Now</a>
                        </button>
                    </div>

                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2
                                class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Luxery Class
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                            <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                                $900.90
                            </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                                Free Drinks
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Premium Seat
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Slipping Facility
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited Tea & Drinks
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                24x7 Support
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            <a href="{{route('buy')}}" wire:navigate>Book Now</a>
                        </button>
                    </div>
                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2
                                class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Deluxe Class
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                            <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                                $1200.90
                            </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                                Hot Buffet With Drinks
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Premium Seat
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Slipping Facility
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited Tea & Drinks
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                24x7 Support
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            <a href="{{route('buy')}}" wire:navigate>Book Now</a>
                        </button>
                    </div </div>
                </div>
            </div>





            <footer class="footer footer-center text-base-content rounded p-10 mt-10">
                <nav class="grid grid-flow-col gap-4">
                    <a class="link link-hover">About us</a>
                    <a class="link link-hover">Contact</a>
                    <a class="link link-hover">Jobs</a>
                    <a class="link link-hover">Press kit</a>
                </nav>
                <nav>
                    <div class="grid grid-flow-col gap-4">
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                </path>
                            </svg>
                        </a>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                </path>
                            </svg>
                        </a>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </nav>
                <aside>
                    <p>Copyright ©  - All right reserved by ACME Industries Ltd</p>
                </aside>
            </footer>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                const progressCircle = document.querySelector(".autoplay-progress svg");
                const progressContent = document.querySelector(".autoplay-progress span");

                const swiperEl = document.querySelector("swiper-container");
                swiperEl.addEventListener("autoplaytimeleft", (e) => {
                    const [swiper, time, progress] = e.detail;
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                });
            </script>
        </div>
</body>

</html>