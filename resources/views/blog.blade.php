<x-header 
title="Stimuls Cloud | Delineate Your Imagination" : keywords="Stimulus Cloud" : description="Stimulus Cloud" : author="Stimulus Cloud"

/>

<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Blogs</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="{{ 'index' }}">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Blogs</li>
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

      @if(count($posts) > 0)
      @foreach ($posts as $post)
      <div class="col-12 col-lg-4 mb-6 mb-lg-0">
        <!-- Blog Card -->
        @php
        $format1 = 'Y-m-d';
        $date = Carbon\Carbon::parse($post->created_at)->format($format1);
        $time  = strtotime($date);
        $day   = date('d',$time);
        $month = date('M',$time);
        $year  = date('Y',$time);
              @endphp

        <div class="card border-0 bg-transparent">
          <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">{{ $day }}
            <br>{{ $month }}</div>
          <img class="card-img-top shadow rounded" src="assets/images/blog/01.png" alt="Image">
          <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">{{ $post->category }}</a>
            <h2 class="h5 font-weight-medium">
                <a class="link-title" href="blog/{{ $post->id }}">{{ $post->title }}</a>
              </h2>
            <p>{{ Str::limit($post->description, 60) }}</p>
            <a class="btn-link" href="blog/{{ $post->id }}">Read More</a>
          </div>
          <div class="card-footer bg-transparent border-0 pt-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 131</a>
              </li>
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 255</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 14</a>
              </li>
            </ul>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      @endforeach
      @endif
    </div>

      
  
      


  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 

<x-footer />