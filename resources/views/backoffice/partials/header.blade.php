   <!-- ======= Mobile nav toggle button ======= -->
   <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

   <!-- ======= Header ======= -->
   <header id="header">
     <div class="d-flex flex-column">
 
       <div class="profile"> 
         <img src="{{asset($infoNav[0]->pic)}}" alt="" class="img-fluid rounded-circle">
         <h1 class="text-light"><a href="#hero">{{$infoNav[0]->name}}</a></h1>
         <div class="social-links mt-3 text-center">
           {{-- <a href="{{$socialNav[0]}}" class="twitter"><i class="bx bxl-twitter"></i></a>
           <a href="{{$socialNav[0]}}" class="facebook"><i class="bx bxl-facebook"></i></a>
           <a href="{{$socialNav[0]}}" class="instagram"><i class="bx bxl-instagram"></i></a>
           <a href="{{$socialNav[0]}}" class="google-plus"><i class="bx bxl-skype"></i></a>
           <a href="{{$socialNav[0]}}" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
          @foreach ($socialNav as $item)
           <a href="{{$item->link}}" class="{{$item->class}}"><i class="{{$item->icon}}"></i></a>
          @endforeach
          </div>
       </div>
 
       <nav class="nav-menu">
         <ul>
           {{-- <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
           <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
           <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
           <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
           <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li> --}}
           @foreach ($linkNav as $item)
            <li><a href="{{$item->href}}"><i class="{{$item->icon}}"></i>{{$item->link}}</a></li>
           @endforeach
           <hr class="my-5">
           <li><a href="{{route('welcome')}}" class="btn btn-success">Home</a></li>
 
         </ul>
       </nav><!-- .nav-menu -->
       <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
 
     </div>
   </header><!-- End Header -->
