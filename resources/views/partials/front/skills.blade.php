<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

      <div class="section-title">
          <h2>{{$skills[0]->skillsTitle}}</h2>
          <p>{{$skills[0]->p1}}</p>
      </div>

      <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

              <div class="progress">
                  <span class="skill">{{$skillsDyn[0]->span}}<i class="val">{{$skillsDyn[0]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[0]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="progress">
                  <span class="skill">{{$skillsDyn[1]->span}}<i class="val">{{$skillsDyn[1]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[1]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="progress">
                  <span class="skill">{{$skillsDyn[2]->span}} <i class="val">{{$skillsDyn[2]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[2]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

              <div class="progress">
                  <span class="skill">{{$skillsDyn[3]->span}} <i class="val">{{$skillsDyn[3]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[3]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="progress">
                  <span class="skill">{{$skillsDyn[4]->span}} <i class="val">{{$skillsDyn[4]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[4]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="progress">
                  <span class="skill">{{$skillsDyn[5]->span}} <i class="val">{{$skillsDyn[5]->i}}</i></span>
                  <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skillsDyn[5]->aria}}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                  </div>
              </div>

          </div>

      </div>

  </div>
</section><!-- End Skills Section -->