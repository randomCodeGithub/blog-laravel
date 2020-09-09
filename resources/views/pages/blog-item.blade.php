@extends('layouts.main')

@section('title', "Blog Page") 

@section('content')

<main class="mt-6">
  <div class="container bg-grey">
    <div class="row justify-content-center">
      <div class="col-12 px-0 px-md-3">
        <div class="mt-5 mb-0 mb-md-5 card shadow">
        <h1 class="mx-3">{{$currentPost->title}}</h1>
<div class="d-flex justify-content-between mx-lg-5 mx-3">
<div class="d-flex">
         <p class="lead">by <a href="#">{{$currentPost->author}}</a></p> 
        </div>
        <div class="d-flex">
          <p class="lead">{{$currentPost->created_at->diffForHumans()}}</p>
        </div>
</div>
        </div>
      </div>
      <div class="col-12 col-md-9 bg-white pt-3 shadow">
      <img class="img-fluid rounded shadow w-100" src="{{$currentPost->img}}" alt="">  
      <hr>  
      </div>
      <div class="col-12 col-md-9 bg-white shadow">
         <p>{{$currentPost->body}}</p> 
        
      </div>
    </div>
  </div>
</main>

<section>
  <div class="container py-5 bg-grey">
    <div class="row">
      <div class="col">
      <h2>Now on the mainpage</h2>        
      </div>
    </div>
    <div class="row justify-content-center">

@foreach ($posts as $item)
@if ($currentPost->id != $item->id )

      <div class="col-12 col-lg col-md-6 my-3">
        <div class="card shadow rounded my-3 h-100" >
          <a class="text-decoration-none" href="/blog/{{$item->id}}">
          <h5 class="card-header">{{$item->title}}</h5>
          <div class=" pt-2 px-2">
          <img src="{{$item->img}}" class="img-object-fit card-img-preview-height card-img-top img-fluid rounded" alt="...">
          </div>
</a>
          <div class="card-body">
            <p class="card-text">{{$item->excerpt}}</p>
          </div>
          <div class="card-footer d-flex justify-content-between">
  
            <div class="d-flex align-items-center">
              <p class="card-text mb-0 pr-1">by {{$item->author}}</p>
              &bullet;
              <p class="card-text mb-0 pr-1 pl-1">{{$item->created_at->diffForHumans()}}</p>
            </div>
  <div class="d-flex">
    <button type="button " class="btn btn-secondary d-md-none d-sm-none">Read more</button>
  </div>
          </div>
        </div>


      </div>   
      @endif
@endforeach



    </div>
  </div>
</section>

@endsection