    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$facts[0]->title}}</h2>
            <p>{{$facts[0]->subtitle}}</p>
          </div>
  
          <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              @foreach ($factsList as $item)
                  <div class="count-box">
                    <i class="{{$item->logo}}"></i>
                    <span data-toggle="counter-up">{{$item->number}}</span>
                    <p><strong>{{$item->title}}</strong>{{$item->content}}</p>
                  </div>
                @if ($loop->iteration % 1 == 0)
                  </div>
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                @endif
              @endforeach
            </div> 
          </div>
  
        </div>
      </section><!-- End Facts Section -->