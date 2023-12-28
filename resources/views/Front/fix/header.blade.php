<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img class="first-slide" src="{{url('assets/img/nav_logos.png')}}" alt="First slide">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="{{route('front.frontpage')}}">Home</a></li>
          <li><a  href="{{route('front.about')}}">About</a></li>
          <li><a  href="{{route('front.csr')}}">CSR</a></li>
          <li><a  href="{{route('front.buyer')}}">Our Buyer</a></li>
          <li><a  href="{{route('front.gallery')}}">Gallery</a></li>
          <li><a  href="{{route('front.audit')}}">Audits & Certificate</a></li>
          <li><a  href="{{route('front.contract')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      
    </div>
  </header>