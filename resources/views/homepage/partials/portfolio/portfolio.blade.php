
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$portfolio[0]->title}}</h2>
            <p>{{$portfolio[0]->content}}</p>
          </div>
  
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">{{$portfolio[0]->filter}}</li>
                @foreach ($portfolioList as $item)
                <li data-filter=".filter-{{$item->filter}}">{{$item->filter}}</li>
                @endforeach
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
  
            @foreach ($portfolioPic as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->filter}}">
              <div class="portfolio-wrap">
                  <img src="{{asset($item->pic)}}" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="{{asset($item->pic)}}" data-gall="portfolioGallery" class="venobox" title="{{$item->param}}"><i class="bx bx-plus"></i></a>
                    <a href="{{$item->link}}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </section><!-- End Portfolio Section -->