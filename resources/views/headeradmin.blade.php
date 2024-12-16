<nav class="navbar">
    <!-- Logo and Text on the Left -->
    <a href="#" class="navbar-logo">DewataZen</a>
    <!-- Right Side (Notification & Profile) -->
    <div class="navbar-extra">
      <a href="#" class="notif"><i data-feather="bell"></i></a>
      <img
        src="{{url("assets/profile.png")}}"
        alt="Profile Picture"
        class="profile-pic"
      />
      <div class="profile-info">
        <h1>{{Auth::user()->username}}</h1>
        <h2>{{ Auth::user()->role }}</h2>

       
      </div>
    </div>
  </nav>