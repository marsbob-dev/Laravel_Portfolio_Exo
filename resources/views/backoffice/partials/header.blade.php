   <!-- ======= Mobile nav toggle button ======= -->
   <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

   <!-- ======= Header ======= -->
   <header id="header">
     <div class="d-flex flex-column">
 
       <div class="profile"> 
         <img src="{{asset($infoNav[0]->pic)}}" alt="" class="img-fluid rounded-circle">
         <h1 class="text-light"><a href="#hero">{{$infoNav[0]->name}}</a></h1>
         <div class="social-links mt-3 text-center">

          @foreach ($socialNav as $item)
           <a href="{{$item->link}}" class="{{$item->class}}"><i class="{{$item->icon}}"></i></a>
          @endforeach
          </div>
       </div>
 
       <nav class="nav-menu">
         <ul>
           
           @foreach ($linkNav as $item)
            <li><a href="{{$item->href}}"><i class="{{$item->icon}}"></i>{{$item->link}}</a></li>
           @endforeach
           <hr class="my-5">
          
           <li><a href="{{route('welcome')}}" class="btn btn-warning">Edit</a></li>

           <li><a href="{{route('welcome')}}" class="btn btn-success">Home</a></li>
 
         </ul>
       </nav><!-- .nav-menu -->
       
       <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
 
     </div>
   </header><!-- End Header -->
