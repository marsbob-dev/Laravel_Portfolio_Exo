    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$skills[0]->title}}</h2>
            <p>{{$skills[0]->content}}</p>
          </div>
  
          <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
              @foreach ($skillsList as $item)
              <div class="progress">
                <span class="skill">{{$item->title}}<i class="val">{{$item->content}}%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->content}}" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
              @if ($loop->iteration % 3 == 0)
            </div>
            <div class="col-lg-6" data-aos="fade-up">
              @endif
              @endforeach
            </div>  
          </div>  
        </div>
        <div class="d-flex justify-content-center">
          <a href="{{}}" class="my-5 btn btn-warning">Edit</a>
        </div>
      </section><!-- End Skills Section -->