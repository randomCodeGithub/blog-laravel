
@extends('layouts.main')

@section('title', "Home")

@section('content')

<header>
<div class="bg-image">
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="button-hover-px col-12 col-lg-8 col-sm-12 col-md-12 text-center text-white text-shadow">
                <h1 class="display-3">Everything blog</h1>
                <p class="mb-5 h4 text-uppercase">A blog about anything and everything.</p>
            </div>
        </div>
    </div>
</div>
</header>

<main>
    <div class="container py-5 bg-grey">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-8  py-3 flex-column">
            <h2 class="d-flex justify-content-center justify-content-md-start justify-content-lg-start">Latest posts</h2>

            @foreach ($somePosts as $post)
                
            <div class="card rounded shadow mb-4">
                <a href="#" class="text-decoration-none a-title">
                <h5 class="card-header">{{$post->title}}</h5>  
                
                
                <div class="px-2 pt-2">
                <img src="{{$post->img}}" class="card-img-top img-fluid rounded" alt="...">
                </div>
                </a>
                <div class="card-body">
                  <p class="card-text">{{$post->excerpt}}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
        
                    <div class="d-flex align-items-center">
                      <p class="card-text mb-0 pr-1">by {{$post->author}}</p>
                      &bullet;
                      <p class="card-text mb-0 pr-1 pl-1">{{$post->created_at->diffForHumans()}}</p>
                      &bullet;
                      <i class="fa fa-eye pl-1 pr-1 light-blue"></i>
                      <p class="card-text mb-0">{{$post->views}}</p>
                    </div>
        <div class="d-flex">
          <a type="button" class="btn btn-secondary text-white d-none" href="/blog/{{$post->id}}">Read more</a>
        </div>
                </div>
              </div>
            @endforeach
            
            
          </div>

          <div class="col-lg-4 col-md-4 col-12 py-3">
            <h2 class="d-flex justify-content-center justify-content-md-start">Most popular</h2>
            <div class="card rounded shadow">            

            @foreach ($popupalPosts as $item)
                @if ($loop->first)

                <a class="text-decoration-none" href="/blog/{{$item->id}}">
                <h5 class="card-header">{{$item->title}}</h5>           
                  <img src="{{$item->img}}" class="img-object-fit card-img-preview-height card-img-top img-fluid rounded-0" alt="...">
                </a>
                  <div class="border-bottom">

                @else

                <div class="border-bottom">
                  <div class="card-body py-1">
                    <a href="/blog/{{$item->id}}" class="text-decoration-none"><h5 class="card-title fw-800">{{$item->title}}</h5></a>
                  </div>

                @endif

                <div class="card-footer border-top-0 d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                    <p class="card-text mb-0 pr-2">{{$item->created_at->diffForHumans()}}</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="fa fa-eye pr-2 light-blue"></i>
                    <p class="card-text mb-0 pr-2">{{$item->views}}</p>
                  </div>
                </div>          
                </div> {{-- </div> of <div class="border-bottom"> in 93 and 97 --}}

            @endforeach

      
            </div>
          </div>

        </div>
      </div>
    </main>

    @php
    $nextSlide = true;
    $carouselItem ='';
    $carouselItemCloseDiv='';
@endphp



    <section>
        <div class="container bg-grey pb-4" >
          <div class="row">
            <div class="col pb-2">
              <h2 class="text-center">Latest posts by category</h2>
            </div>
          </div>
          <div class="row rounded-top bg-dark mx-0">
            <div class="col-6">
              <h2 class="pl-2 text-light">Games</h2>
             
            </div>
            <div class="col-6 d-flex justify-content-end">
  <a class="carousel-control-prev position-static carousel-button-width" href="#gamesNewsSlider" role="button" data-slide="prev" >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next position-static carousel-button-width" href="#gamesNewsSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> 
            </div>
          </div>
          <div class="row justify-content-center">
           <div id="gamesNewsSlider" class="carousel slide mt-4">
            <div class="carousel-inner">


              @foreach ($postsGames as $item)

                  @if ($loop->first || $nextSlide == true)

                     <div class="carousel-item {{$loop->index == 0 ? 'active' : '' }} ">
                       <div class="row mx-1 px-0 ">
                      
                      @php
                      $carouselItemCloseDiv = ''; 
                        $nextSlide = false; 
                      @endphp

                  @else
                      @php
                      $carouselItemCloseDiv = '</div>
                                           </div>';
                      $nextSlide = true;
                      @endphp

                  @endif

                  <div class="col-6 px-1 px-md-2 px-lg-2">
                    <div class="card rounded shadow h-100">
                      <a class="text-decoration-none" href="/blog/{{$item->id}}">
                      <h5 class="card-header">{{$item->title}}</h5>  
                        
                      <div class="px-2 pt-2">
                      <img src="{{$item->img}}" class="card-resp-height card-carousel-width img-object-fit  card-img-top img-fluid rounded" alt="...">
                    </div>
                      </a>
                      <div class="card-body">
                        <p class="card-text">{{$item->excerpt}}</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between">
              
                        <div class="d-flex align-items-center fs-resp">
                          <p class="card-text mb-0 pr-1">by {{$item->author}}</p>
                          &bullet;
                          <p class="card-text mb-0 pr-1 pl-1">{{$item->created_at->diffForHumans()}}</p>
                        </div>
              <div class="d-flex d-none">
                <a type="button" class="btn btn-secondary text-white">Read more</a>
              </div>
                      </div>
                    </div>
                  </div>
                  {!!$carouselItemCloseDiv!!}

              @endforeach

            </div>
          </div>     
          </div>
        </div>
      </section>

      
      <section>
        <div class="container bg-grey pb-3">
              <div class="row rounded-top bg-dark mx-0">
                <div class="col-6">
                  <h2 class="pl-2 text-light">Tops</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
      <a class="carousel-control-prev position-static carousel-button-width" href="#carouselExampleControls" role="button" data-slide="prev" >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next position-static carousel-button-width" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a> 
                </div>
                
              </div>

          <div class="row justify-content-center">
           <div id="carouselExampleControls" class="carousel slide mt-4">
            <div class="carousel-inner">

              @foreach ($postsTops as $item)

                  @if ($loop->first || $nextSlide == true)

                     <div class="carousel-item {{$loop->index == 0 ? 'active' : '' }} ">
                       <div class="row mx-1 px-0">
                      
                      @php 
                        $nextSlide = false; 
                        $carouselItemCloseDiv = ''; 
                         @endphp

                  @else
                      @php
                      $carouselItemCloseDiv = '</div>
                                           </div>';
                      $nextSlide = true;
                      @endphp

                  @endif

                  <div class="col-6 px-1 px-md-2 px-lg-2">
                    <div class="card rounded shadow h-100">
                      <a class="text-decoration-none" href="/blog/{{$item->id}}">
                      <h5 class="card-header">{{$item->title}}</h5>  
                        
                      <div class="px-2 pt-2">
                      <img src="{{$item->img}}" class="card-resp-height card-carousel-width img-object-fit  card-img-top img-fluid rounded" alt="...">
                    </div>
                      </a>
                      <div class="card-body">
                        <p class="card-text">{{$item->excerpt}}</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between">
              
                        <div class="d-flex align-items-center fs-resp">
                          <p class="card-text mb-0 pr-1">by {{$item->author}}</p>
                          &bullet;
                          <p class="card-text mb-0 pr-1 pl-1">{{$item->created_at->diffForHumans()}}</p>
                        </div>
              <div class="d-flex d-none">
                <a type="button" class="btn btn-secondary text-white">Read more</a>
              </div>
                      </div>
                    </div>
                  </div>
                  {!!$carouselItemCloseDiv!!}

              @endforeach

            </div>
          </div>     
          </div>
      
        </div>
      </section>


@endsection