<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/blog.css')}}"> 
</head>
<body>
    <x-layouts.header/>

     <!--Popular vendor-->
    <div class="container pb-5 pt-3 mt-3">
        <div class="row">
            <div class="col-xl-5   popular-title">
                <span class="trend mb-2">Latest</span>
                <h4>Blogs</h4>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-9">
                <div class="single-post">
                    <div class="post-meta"><span class="date">Author: {{$blogs->author}}</span> <span class="mx-1">&bullet;</span> 
                        <span>
                            {{$blogs->created_at->format('y/m/d')}}
                        </span>
                    </div>
                    <h2 class="mb-3">{{$blogs->blogTitle}}</h2>
                    <div class="image mb-4">
                      <img src="{{asset($blogs->blogImage)}}" alt="">
                    </div>
                    <div>
                        <p class="blogCompose mt-2">{!! $blogs->blogCompose !!}</p>
                    </div>
                </div><!-- End Single Post Content -->
            </div>
        </div>
    </div>
    <x-layouts.footer/>
</body>
</html>
