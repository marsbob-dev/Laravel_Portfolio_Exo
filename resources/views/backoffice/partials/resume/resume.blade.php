    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$resume[0]->title}}</h2>
            <p>{{$resume[0]->content}}</p>
          </div>
          {{-- sumary --}}
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">{{$resume[0]->sub1}}</h3>
              <div class="resume-item pb-0">
                <h4>{{$resumeSummaries[0]->name}}</h4>
                <p><em>{{$resumeSummaries[0]->subtitle}}</em></p>
                <ul>
                  <li>{{$resumeSummaries[0]->adress}}</li>
                  <li>{{$resumeSummaries[0]->tel}}</li>
                  <li>{{$resumeSummaries[0]->mail}}</li>
                </ul>
              </div>
              {{-- education --}}
              <h3 class="resume-title">{{$resume[0]->sub2}}</h3>
              <div class="resume-item">
                @foreach ($resumeEducation as $item)
                  <h4>{{$item->title}}</h4>
                  <h5>{{$item->year}}</h5>
                  <p><em>{{$item->subtitle}}</em></p>
                  <p>{{$item->content}}</p>
                @if ($loop->iteration % 1 == 0)
              </div>
              <div class="resume-item">
                @endif
                @endforeach
              </div>
            </div>
            {{-- pro --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">{{$resume[0]->sub3}}</h3>
              <div class="resume-item">
                @foreach ($resumePro as $item)
                <h4>{{$item->name}}</h4>
                <h5>{{$item->year}}</h5>
                <p><em>{{$item->place}}</em></p>
                <ul>
                  <li>{{$item->job1}}</li>
                  <li>{{$item->job2}}</li>
                  <li>{{$item->job3}}</li>
                  <li>{{$item->job4}}</li>
                </ul>
                @if ($loop->iteration % 1 == 0)
              </div>
              <div class="resume-item">
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="{{}}" class="my-5 btn btn-warning">Edit</a>
        </div>
      </section><!-- End Resume Section -->