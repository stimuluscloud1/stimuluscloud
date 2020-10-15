<x-header 
title="Stimuls Cloud | Delineate Your Imagination" : keywords="Stimulus Cloud" : description="Stimulus Cloud" : author="Stimulus Cloud"

/>


<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Blog Single</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
    

          @php
    $format1 = 'Y-m-d';
    $date = Carbon\Carbon::parse($post->created_at)->format($format1);
    $time  = strtotime($date);
    $day   = date('d',$time);
    $month = date('M',$time);
    $year  = date('Y',$time);
          @endphp

          <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">{{ $day }}
            <br>{{ $month}}, {{ $year }}</div>
          <img class="card-img-top shadow rounded" src="{{ URL::asset('assets/images/blog/01.png') }}" alt="Image">
          <div class="card-body pt-5 px-0">
            <ul class="list-inline">
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 131</a>
              </li>
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 255</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 14</a>
              </li>
            </ul>
            <h2 class="font-weight-medium">
              {{ $post->title }}
              </h2>
            <p>{{ $post->description }}.</p>
          </div>
          <div class="d-md-flex justify-content-between mt-5 mb-5">
            <div>
              <h6 class="mb-2">Share: </h6>
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i class="la la-facebook"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i class="la la-dribbble"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i class="la la-instagram"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i class="la la-twitter"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i class="la la-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="text-md-right mt-5 mt-md-0">
              <h6 class="mb-2">Tags: </h6>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">Web Design</a>
                </li>
                <li class="list-inline-item"><a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">UX/UI</a>
                </li>
                <li class="list-inline-item"><a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">Software</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="owl-carousel no-pb" data-dots="false" data-items="2" data-sm-items="1" data-autoplay="true">
            <div class="item">
              <div class="card border-0 bg-transparent m-4">
                <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">15
                  <br>July</div>
                <img class="card-img-top shadow rounded" src="{{ URL::asset('assets/images/blog/02.png') }}" alt="Image">
                <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">Sass</a>
                  <h2 class="h5 font-weight-medium">
                <a class="link-title" href="blog-single.html">The most powerfull template that make you.</a>
              </h2>
                  <p>Businesses need access to development resources serspiciatis unde omnis iste natus error.</p>
                </div>
                <div></div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 bg-transparent m-4">
                <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">15
                  <br>July</div>
                <img class="card-img-top shadow rounded" src="{{ URL::asset('assets/images/blog/03.png') }}" alt="Image">
                <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">Marketing</a>
                  <h2 class="h5 font-weight-medium">
                <a class="link-title" href="blog-single.html">A brand for a company is like a reputation person.</a>
              </h2>
                  <p>Businesses need access to development resources serspiciatis unde omnis iste natus error.</p>
                </div>
                <div></div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 bg-transparent m-4">
                <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">15
                  <br>July</div>
                <img class="card-img-top shadow rounded" src="{{ URL::asset('assets/images/blog/01.png') }}" alt="Image">
                <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">Landing</a>
                  <h2 class="h5 font-weight-medium">
                <a class="link-title" href="blog-single.html">The most powerfull template that make you.</a>
              </h2>
                  <p>Businesses need access to development resources serspiciatis unde omnis iste natus error.</p>
                </div>
                <div></div>
              </div>
            </div>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 



<x-footer />