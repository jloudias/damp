@extends('layouts.app')

@section('content')
<!-- HERO SLIDER SECTION-->
<section class="text-white bg-cover bg-center primary-overlay overlay-dense"
  style="background: url('img/photogrid.jpg') repeat">
  <div class="overlay-content py-5">
    <div class="container py-4">
      <!-- Hero slider-->
      <div class="swiper-container homepage-slider">
        <div class="swiper-wrapper">
          <!-- Hero Slide-->
          <div class="swiper-slide h-auto mb-5">
            <div class="row gy-5 h-100 align-items-center">
              <div class="col-lg-5 text-lg-end"><img class="ml-auto img-fluid" src="img/logo.png" alt="">
                <h1 class="text-uppercase">Multipurpose responsive theme</h1>
                <ul class="list-unstyled text-uppercase fw-bold mb-0">
                  <li class="mb-2">Business. Corporate. Agency.</li>
                  <li>Portfolio. Blog. E-commerce.</li>
                </ul>
              </div>
              <div class="col-lg-7"><img class="img-fluid" src="img/template-homepage.png" alt=""></div>
            </div>
          </div>
          <!-- Hero Slide-->
          <div class="swiper-slide h-auto mb-5">
            <div class="row gy-5 h-100 align-items-center">
              <div class="col-lg-7"><img class="img-fluid" src="img/template-mac.png" alt=""></div>
              <div class="col-lg-5">
                <h1 class="text-uppercase">46 HTML pages full of features</h1>
                <ul class="list-unstyled text-uppercase fw-bold mb-0">
                  <li class="mb-2">Sliders and carousels</li>
                  <li class="mb-2">4 Header variations</li>
                  <li class="mb-2">Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                  <li>+ 11 extra pages showing template features</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Hero Slide-->
          <div class="swiper-slide h-auto mb-5">
            <div class="row gy-5 h-100 align-items-center">
              <div class="col-lg-5 text-lg-end">
                <h1 class="text-uppercase">Design</h1>
                <ul class="list-unstyled text-uppercase fw-bold mb-0">
                  <li class="mb-2">Clean and elegant design</li>
                  <li class="mb-2">Full width and boxed mode</li>
                  <li class="mb-2">Easily readable Roboto font and awesome icons</li>
                  <li>7 preprepared colour variations</li>
                </ul>
              </div>
              <div class="col-md-7"><img class="img-fluid" src="img/template-easy-customize.png" alt=""></div>
            </div>
          </div>
          <!-- Hero Slide-->
          <div class="swiper-slide h-auto mb-5">
            <div class="row gy-5 h-100 align-items-center">
              <div class="col-lg-7"><img class="img-fluid" src="img/template-easy-code.png" alt=""></div>
              <div class="col-lg-5">
                <h1 class="text-uppercase">Easy to customize</h1>
                <ul class="list-unstyled text-uppercase fw-bold mb-0">
                  <li class="mb-2">7 preprepared colour variations.</li>
                  <li>Easily to change fonts</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-light"></div>
      </div>
    </div>
  </div>
</section>
<!-- WHO ARE WE SECTION-->
<section class="py-5">
  <div class="container py-4">
    <header class="mb-5">
      <h2 class="lined lined-center text-uppercase mb-4">Who are we?</h2>
    </header>
    <div class="row gy-4">
      <!-- Team member  -->
      <div class="col-lg-3 col-md-6 text-center"><a href="team-member.html"><img class="avatar avatar-xxl p-2 mb-4"
            src="img/person-1.jpg" alt="Han Solo"></a>
        <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="team-member.html">Han Solo</a></h3>
        <p class="text-muted small text-uppercase">Founder</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="list-inline-item"><a class="social-link twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a class="social-link youtube" href="#"><i class="fab fa-youtube"></i></a></li>
          <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
        <p class="small small text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
          ac turpis egestas.</p>
      </div>
      <!-- Team member  -->
      <div class="col-lg-3 col-md-6 text-center"><a href="team-member.html"><img class="avatar avatar-xxl p-2 mb-4"
            src="img/person-2.jpg" alt="Luke Skywalker"></a>
        <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="team-member.html">Luke Skywalker</a></h3>
        <p class="text-muted small text-uppercase">CTO</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="list-inline-item"><a class="social-link twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a class="social-link youtube" href="#"><i class="fab fa-youtube"></i></a></li>
          <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
        <p class="small small text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
          ac turpis egestas.</p>
      </div>
      <!-- Team member  -->
      <div class="col-lg-3 col-md-6 text-center"><a href="team-member.html"><img class="avatar avatar-xxl p-2 mb-4"
            src="img/person-3.png" alt="Princess Leia"></a>
        <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="team-member.html">Princess Leia</a></h3>
        <p class="text-muted small text-uppercase">Team Leader</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="list-inline-item"><a class="social-link twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a class="social-link youtube" href="#"><i class="fab fa-youtube"></i></a></li>
          <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
        <p class="small small text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
          ac turpis egestas.</p>
      </div>
      <!-- Team member  -->
      <div class="col-lg-3 col-md-6 text-center"><a href="team-member.html"><img class="avatar avatar-xxl p-2 mb-4"
            src="img/person-4.jpg" alt="Jabba Hut"></a>
        <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="team-member.html">Jabba Hut</a></h3>
        <p class="text-muted small text-uppercase">Lead Developer</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="list-inline-item"><a class="social-link twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a class="social-link youtube" href="#"><i class="fab fa-youtube"></i></a></li>
          <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
        <p class="small small text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
          ac turpis egestas.</p>
      </div>
    </div>
  </div>
</section>
<!-- BANNER SECTION-->
<section class="py-5 bg-fixed bg-cover bg-center dark-overlay" style="background: url(img/fixed-background-2.jpg)">
  <div class="overlay-content">
    <div class="container py-4 text-white text-center">
      <div class="icon icon-outlined icon-lg mx-auto mb-4">
        <svg class="svg-icon text-white svg-icon-lg">
          <use xlink:href="#numbers-1"> </use>
        </svg>
      </div>
      <h2 class="text-uppercase mb-3">Do you want to see more?</h2>
      <p class="lead mb-4">We have prepared for you more than 40 different HTML pages, including 5 variations of
        homepage.</p><a class="btn btn-outline-light btn-lg" href="index2.html">See another homepage</a>
    </div>
  </div>
</section>
<!-- CUSTOMERS SECTION-->
<section class="py-5 bg-gray-200">
  <div class="container py-4">
    <!-- Customer slider-->
    <div class="swiper-container customers-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-1.png"
            alt="..." width="140"></div>
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-2.png"
            alt="..." width="140"></div>
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-3.png"
            alt="..." width="140"></div>
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-4.png"
            alt="..." width="140"></div>
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-5.png"
            alt="..." width="140"></div>
        <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/customer-6.png"
            alt="..." width="140"></div>
      </div>
    </div>
  </div>
</section>
<!-- TESTIMONIALS SECTION-->
<section class="py-5 bg-pentagon border-top border-gray-600">
  <div class="container py-4">
    <header class="mb-5">
      <h2 class="lined lined-center text-uppercase mb-4">Testimonials</h2>
      <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation
        happy and satisfied. Have a look what our clients said about us.</p>
    </header>
    <!-- Testimonials slider-->
    <div class="swiper-container testimonials-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide h-auto mb-5">
          <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <p class="text-sm text-gray-600">One morning, when Gregor Samsa woke from troubled dreams, he found
                himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted
                his head a little he could see his brown belly, slightly domed and divided by arches into stiff
                sections.</p>
              <p class="text-sm text-gray-600"></p>
            </div>
            <div class="d-flex align-items-center justify-content-between"><i
                class="fas fa-quote-left text-primary fa-2x"></i>
              <div class="d-flex align-items-center ms-3">
                <div class="me-3 text-end">
                  <h5 class="text-uppercase mb-0">John McIntyre</h5>
                  <p class="small text-muted mb-0">CEO, transTech</p>
                </div><img class="avatar p-1 flex-shrink-0" src="img/person-1.jpg" alt="John McIntyre" width="60">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto mb-5">
          <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <p class="text-sm text-gray-600">The bedding was hardly able to cover it and seemed ready to slide off any
                moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly
                as he looked. &quot;What's happened to me? &quot; he thought. It wasn't a dream.</p>
              <p class="text-sm text-gray-600"></p>
            </div>
            <div class="d-flex align-items-center justify-content-between"><i
                class="fas fa-quote-left text-primary fa-2x"></i>
              <div class="d-flex align-items-center ms-3">
                <div class="me-3 text-end">
                  <h5 class="text-uppercase mb-0">John McIntyre</h5>
                  <p class="small text-muted mb-0">CEO, transTech</p>
                </div><img class="avatar p-1 flex-shrink-0" src="img/person-2.jpg" alt="John McIntyre" width="60">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto mb-5">
          <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <p class="text-sm text-gray-600">His room, a proper human room although a little too small, lay peacefully
                between its four familiar walls.</p>
              <p class="text-sm text-gray-600">A collection of textile samples lay spread out on the table - Samsa was a
                travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated
                magazine and housed in a nice, gilded frame.</p>
            </div>
            <div class="d-flex align-items-center justify-content-between"><i
                class="fas fa-quote-left text-primary fa-2x"></i>
              <div class="d-flex align-items-center ms-3">
                <div class="me-3 text-end">
                  <h5 class="text-uppercase mb-0">John McIntyre</h5>
                  <p class="small text-muted mb-0">CEO, transTech</p>
                </div><img class="avatar p-1 flex-shrink-0" src="img/person-3.png" alt="John McIntyre" width="60">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto mb-5">
          <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <p class="text-sm text-gray-600">It showed a lady fitted out with a fur hat and fur boa who sat upright,
                raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned
                to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made
                him feel quite sad.</p>
              <p class="text-sm text-gray-600"></p>
            </div>
            <div class="d-flex align-items-center justify-content-between"><i
                class="fas fa-quote-left text-primary fa-2x"></i>
              <div class="d-flex align-items-center ms-3">
                <div class="me-3 text-end">
                  <h5 class="text-uppercase mb-0">John McIntyre</h5>
                  <p class="small text-muted mb-0">CEO, transTech</p>
                </div><img class="avatar p-1 flex-shrink-0" src="img/person-4.jpg" alt="John McIntyre" width="60">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto mb-5">
          <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <p class="text-sm text-gray-600">It showed a lady fitted out with a fur hat and fur boa who sat upright,
                raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned
                to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made
                him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could
                be heard hitting the pane, which made him feel quite sad.</p>
              <p class="text-sm text-gray-600"></p>
            </div>
            <div class="d-flex align-items-center justify-content-between"><i
                class="fas fa-quote-left text-primary fa-2x"></i>
              <div class="d-flex align-items-center ms-3">
                <div class="me-3 text-end">
                  <h5 class="text-uppercase mb-0">John McIntyre</h5>
                  <p class="small text-muted mb-0">CEO, transTech</p>
                </div><img class="avatar p-1 flex-shrink-0" src="img/person-1.jpg" alt="John McIntyre" width="60">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- BLOG SECTION-->
<section class="py-5">
  <div class="container py-4">
    <header class="mb-5">
      <h2 class="lined lined-center text-uppercase mb-4">From the blog</h2>
      <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
        egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="blog.html">Check our
          blog</a></p>
    </header>
    <div class="row gy-5">
      <!-- blog box-->
      <div class="col-lg-3 col-md-6">
        <div class="box-image">
          <div class="mb-4 primary-overlay"><img class="img-fluid" src="img/portfolio-1.jpg" alt="...">
            <div class="overlay-content d-flex flex-column justify-content-center p-4">
              <ul class="list-inline mb-0 box-image-content text-center">
                <li class="list-inline-item"><a class="btn btn-outline-light" href="blog-post.html"> <i
                      class="fas fa-link me-2"></i>Read more</a></li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 text-uppercase text-primary"> <a class="text-reset" href="blog-post.html">Fashion now </a>
            </h3>
            <p class="small text-uppercase text-muted">By <a href="#">John snow </a>in <a href="#">Web design</a></p>
            <p class="text-gray-600 text-sm text-start">Fifth abundantly made Give sixth hath. Cattle creature i be
              don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a
              class="btn btn-outline-primary" href="blog-post.html">Continue reading</a>
          </div>
        </div>
      </div>
      <!-- blog box-->
      <div class="col-lg-3 col-md-6">
        <div class="box-image">
          <div class="mb-4 primary-overlay"><img class="img-fluid" src="img/portfolio-2.jpg" alt="...">
            <div class="overlay-content d-flex flex-column justify-content-center p-4">
              <ul class="list-inline mb-0 box-image-content text-center">
                <li class="list-inline-item"><a class="btn btn-outline-light" href="blog-post.html"> <i
                      class="fas fa-link me-2"></i>Read more</a></li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 text-uppercase text-primary"> <a class="text-reset" href="blog-post.html">What to do </a></h3>
            <p class="small text-uppercase text-muted">By <a href="#">John snow </a>in <a href="#">Web design</a></p>
            <p class="text-gray-600 text-sm text-start">Fifth abundantly made Give sixth hath. Cattle creature i be
              don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a
              class="btn btn-outline-primary" href="blog-post.html">Continue reading</a>
          </div>
        </div>
      </div>
      <!-- blog box-->
      <div class="col-lg-3 col-md-6">
        <div class="box-image">
          <div class="mb-4 primary-overlay"><img class="img-fluid" src="img/portfolio-3.jpg" alt="...">
            <div class="overlay-content d-flex flex-column justify-content-center p-4">
              <ul class="list-inline mb-0 box-image-content text-center">
                <li class="list-inline-item"><a class="btn btn-outline-light" href="blog-post.html"> <i
                      class="fas fa-link me-2"></i>Read more</a></li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 text-uppercase text-primary"> <a class="text-reset" href="blog-post.html">5 ways to look
                awesome </a></h3>
            <p class="small text-uppercase text-muted">By <a href="#">John snow </a>in <a href="#">Web design</a></p>
            <p class="text-gray-600 text-sm text-start">Fifth abundantly made Give sixth hath. Cattle creature i be
              don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a
              class="btn btn-outline-primary" href="blog-post.html">Continue reading</a>
          </div>
        </div>
      </div>
      <!-- blog box-->
      <div class="col-lg-3 col-md-6">
        <div class="box-image">
          <div class="mb-4 primary-overlay"><img class="img-fluid" src="img/portfolio-4.jpg" alt="...">
            <div class="overlay-content d-flex flex-column justify-content-center p-4">
              <ul class="list-inline mb-0 box-image-content text-center">
                <li class="list-inline-item"><a class="btn btn-outline-light" href="blog-post.html"> <i
                      class="fas fa-link me-2"></i>Read more</a></li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 text-uppercase text-primary"> <a class="text-reset" href="blog-post.html">Fashion snow </a>
            </h3>
            <p class="small text-uppercase text-muted">By <a href="#">John snow </a>in <a href="#">Web design</a></p>
            <p class="text-gray-600 text-sm text-start">Fifth abundantly made Give sixth hath. Cattle creature i be
              don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a
              class="btn btn-outline-primary" href="blog-post.html">Continue reading</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- GET IT-->
<div class="bg-primary py-5 text-white">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 p-3">
        <h3 class="text-uppercase mb-0">Do you want cool website like this one?</h3>
      </div>
      <div class="col-lg-4 p-3"> <a class="btn btn-outline-light" href="#">Buy this template now</a></div>
    </div>
  </div>
</div>


@endsection