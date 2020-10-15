<x-headeradmin />

    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog List</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                
                    @if(count($posts) > 0)
                    @foreach ($posts as $post)

                    @php
                    $format1 = 'Y-m-d';
                    $date = Carbon\Carbon::parse($post->created_at)->format($format1);
                    $time  = strtotime($date);
                    $day   = date('d',$time);
                    $month = date('M',$time);
                    $year  = date('Y',$time);
                          @endphp

                    <div class="card single_post">
                        <div class="body">
                           <P>Date: {{ $day }}, {{ $month }}, {{ $year }}</P> 
                            <h3><a href="blog-details.html">{{ $post->title }}</a></h3>
                            <div class="img-post">
                                <img class="d-block img-fluid" src="../assets/images/blog/blog-page-1.jpg" alt="First slide">
                            </div>
                            <p>{{ Str::limit($post->description, 300) }}</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="blog-detail/{{ $post->id }}" class="btn btn-outline-secondary">Continue Reading</a>
                                <a href="blog-detail/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a>
                                <a href="blog-detail/{{ $post->id }}/delete" class="btn btn-outline-secondary">Delete</a>
                            </div>
                            <ul class="stats">
                                

                            </ul>
                        </div>
                    </div>

                    @endforeach
                    
                        {{  $posts->links()  }}
                    
                    @endif
                  
                    
                             
                </div>
            </div>

        </div>
    </div>
    
</div>

<x-footeradmin />