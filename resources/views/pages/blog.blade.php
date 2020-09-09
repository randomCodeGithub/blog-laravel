@extends('layouts.main')

@section('title', "Blog Page") 

@section('content')

  <main class="mt-6">
    <div class="container bg-grey">
      <div class="row">
        <div class="col">
          <h2>Last posts</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card rounded shadow">
            <a href="/blog/{{$newestPost->id}}" class="text-decoration-none">
            <h5 class="card-header">{{$newestPost->title}}</h5>
            
            <div class="px-2 pt-2">
            <img src="{{$newestPost->img}}" class="card-img-top img-fluid rounded" alt="...">
            </div>
            </a>
            <div class="card-body">
              <p class="card-text">{{$newestPost->excerpt}}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">

              <div class="d-flex align-items-center">
                <p class="card-text mb-0 pr-1">by {{$newestPost->author}}</p>
                &bullet;
                <p class="card-text mb-0 pr-1 pl-1">{{$newestPost->created_at->diffForHumans()}}</p>
                &bullet;
                <i class="fa fa-eye pl-1 pr-1 light-blue"></i>
                <p class="card-text mb-0">{{$newestPost->views}}</p>
              </div>
              <div class="d-flex">
                <a href="/blog/{{$newestPost->id}}" type="button" class="btn btn-secondary text-white d-none">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-3">
        <div class="col-12">
          <h2 class="mt-3">Other posts</h2>
        </div>

         @foreach ($otherPosts as $item)
         @if ($newestPost->id != $item->id)
         <div class="col-12 col-lg-4 col-md-6 pb-4">
          <div class="card rounded shadow mb-4 project visi arhit h-100 ">
            <a href="/blog/{{$item->id}}" class="text-decoration-none">
              <h5 class="card-header">{{$item->title}}</h5>
            
            <div class="px-2 pt-2">
            <img src="{{$item->img}}" class="img-object-fit card-img-preview-height card-img-top img-fluid rounded" alt="...">
            </div>
            </a>
            <div class="card-body">
              <p class="card-text">{{$item->excerpt}}</p>
            </div>
            <div class="card-footer px-3 px-md-2 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                  <p class="card-text mb-0 pr-1">by {{$item->author}}</p>
                  &bullet;
                  <p class="card-text mb-0 pl-1">{{$item->created_at->diffForHumans()}}</p>
                </div>
                <div class="d-flex align-items-center">
                  <i class="fa fa-eye pr-1 light-blue"></i>
                  <p class="card-text mb-0">{{$item->views}}</p>
                </div>

            </div>
          </div>
         </div>
         @endif
         @endforeach       


     
      </div>
    </div>
  </main>

  @endsection
