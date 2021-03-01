 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$hero[0]->name}}</h1>
      <p>{{$hero[0]->flavor}}<span class="typed" data-typed-items="{{$hero[0]->content}}"></span></p>
    </div>
  </section><!-- End Hero -->