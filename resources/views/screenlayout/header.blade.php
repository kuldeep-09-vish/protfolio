@php
use App\Models\AdminData;
use App\Models\AdminAbout;
$adminData = AdminData::first();
$adminAbout = AdminAbout::first();
@endphp

<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
        <img  src="{{ asset('uploads/about_images/' . $adminAbout->about_image) }}" alt=""
            class="img-fluid rounded-circle">

    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
        <h1 class="sitename">{{$adminData->name}}</h1>
    </a>

    <div class="social-links text-center">
        <a href="{{$adminData->twitter}}" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="{{$adminData->fb}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$adminData->insta}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$adminData->skype}}" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="{{$adminData->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
            <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
            <li><a href="#skills"><i class="bi bi-laptop navicon"></i> Skill</a></li>
            <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
            <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
            <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
            <li><a href="#testimonials"><i class="bi bi-chat-left-quote navicon"></i> Testimonials</a></li>
            <!-- <li><a href="#testimonials"><i class="bi bi-hdd-stack navicon"></i> Testimonials</a></li>  -->
            <!-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> -->
            <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        </ul>
    </nav>

</header>