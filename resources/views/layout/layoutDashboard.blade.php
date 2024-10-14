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
  @vite('resources/css/app.css')
</head>

<body>
  <aside class="sidebar" id="sidebar">
    <button class="close-btn" id="close-btn">&times;</button>
    <div class="sidebar-header">
      <div class="image-sidebar">
        <img src="https://via.placeholder.com/30" />
        <h3>Bcom</h3>
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
          <h1>Welcome Back, {{auth()->user()->username}}</h1>
          <p class="date-time">{{ $dateToday }}, {{ $dateMonth }}</p>
        </div>
      </div>
      <div class="user-info">
        <span class="user-name">{{auth()->user()->username}}</span>
        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" width="50" height="75" class="user-avatar rounded-full" />
      </div>
    </header>

    @yield('content')
  </div>


  <script>
    const menuBtn = document.getElementById("menu-btn");
        const sidebar = document.getElementById("sidebar");
        const closeBtn = document.getElementById("close-btn");
        menuBtn.addEventListener("click", () => {
          sidebar.style.marginLeft = "0rem";
        });
  
        closeBtn.addEventListener("click", () => {
          sidebar.style.marginLeft = "-17rem";
        });
  
        const setSidebarPosition = () => {
          if (window.innerWidth > 1200) {
            sidebar.style.marginLeft = "0rem";
          } else {
            sidebar.style.marginLeft = "-17rem";
          }
        };
        setSidebarPosition();
        window.addEventListener("resize", setSidebarPosition);

        const input = document.getElementById('file-input');
        const previewPhoto = () => {

        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');
            preview.classList.remove('hidden');
        fileReader.onload = function (event) {
                preview.setAttribute('src', event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
    input.addEventListener("change", previewPhoto);
  </script>
</body>

</html>