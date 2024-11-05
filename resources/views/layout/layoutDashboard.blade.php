<?php
use Carbon\Carbon;

$date = Carbon::today();
$dateToday = $date->translatedFormat('l');
$dateMonth = $date->translatedFormat('F d, Y');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bloggard Community</title>
  <link rel="stylesheet" href="{{ asset('style/dashboard.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href={{ asset('img/bro.png') }} type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
</head>

<body>
  <aside class="sidebar" id="sidebar">
    <button class="close-btn" id="close-btn">&times;</button>
    <div class="sidebar-header">
      <div class="image-sidebar">
        <h3>
          <a href="">Blogard</a></h3>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li>
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'text-purple-950' : 'text-black'}}"><i
            class="fas fa-home "></i> Dashboard</a>
      </li>
      <li>
        <a href="/dashboard/posts" class="{{ Request::is('dashboard/posts*') ? 'text-purple-950' : 'text-black'}}"><i
            class="fa-solid fa-newspaper"></i> Posts</a>
      </li>
      <li>
        <a href="/dashboard/users" class="{{ Request::is('dashboard/users*') ? 'text-purple-950' : 'text-black'}}"><i
            class="fas fa-user"></i> Users</a>
      </li>
      <li>
        <a href="/dashboard/category"
          class="{{ Request::is('dashboard/category*') ? 'text-purple-950' : 'text-black'}}"><i
            class="fas fa-chart-bar"></i> Categories</a>
      </li>
      <li>
        <form action="/logout" method="POST" class="py-[15px]">
          @csrf
          <button
            class=" text-[18px] font-semibold px-[8px] {{ Request::is('dashboard/logout') ? 'text-purple-950' : 'text-black'}}"><i
              class="fas fa-sign-out-alt mr-[15px]"></i> Logout</button>
        </form>
      </li>
    </ul>
  </aside>

  <div class="main-content overflow-x-hidden">
    <header>
      <div class="header-title">
        <button class="menu-btn" id="menu-btn">
          <i class="fas fa-bars"></i>
        </button>
        <div>
          <h1> Welcome Back, {{auth()->user()->username}}</h1>
          <p class="date-time">{{ $dateToday }}, {{ $dateMonth }}</p>
          <a href="/" class="text-[18px] font-semibold no-underline text-lime-600">back to home</a>
        </div>
      </div>
      <div class="user-info">
        <span class="user-name hidden sm:block">{{auth()->user()->username}}</span>
        <img
          src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }} "
          width="50" height="50" class="user-avatar rounded-full" />
      </div>
    </header>

    @yield('content')
  </div>


  <script src="{{ asset('js/index.js') }}"></script>
  <script src="{{ asset('js/filePreviewLoader.js') }}"></script>
</body>

</html>