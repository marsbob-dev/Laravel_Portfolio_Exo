<!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2>{{$about[0]->title}}</h2>
        <p>{{$about[0]->describe}}</p>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset($about[0]->img)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$about[0]->subtitle}}</h3>
          <p class="font-italic">
            {{$about[0]->subdescription}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                @foreach ($aboutList as $item)
                  <li><i class="{{$item->class}}"></i><strong>{{$item->name}}</strong>{{$item->content}}</li>
                    @if ($loop->iteration % 4 == 0)
                      </ul>
                      </div>
                      <div class="col-lg-6">
                      <ul>
                    @endif
                @endforeach
              </ul>
            </div>
          </div>
          <p>
            {{$about[0]->resume}}
          </p>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->