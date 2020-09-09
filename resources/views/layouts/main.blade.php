<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
  </head>
  <body>

@include('partials.menu')

@yield('content')


<footer>
  <div class="container bg-dark py-2 text-white">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <p>&copy; 2020.All rights reserved </p>
       
      </div>
       
     <div class="col-12 d-flex justify-content-center">
      <ul class="d-flex list-unstyled mb-0">
      <li class="nav-item mr-3">
        <a class="nav-link text-black-50 d-flex align-items-center px-3 py-0"  href="/">Home <span class="sr-only">(current)</span>             
        </a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link text-black-50 text-white d-flex align-items-center px-3 py-0" href="/blog">Blogs</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link text-black-50 text-white d-flex align-items-center px-3 py-0" href="/contact-us">Contact us</a>
      </li>
    </ul>      
     </div>

    </div>
  </div>
</footer>

  <button type="button" class="btn bg-orange text-light position-absolute scrollTop position-fixed rounded-circle"><i class=" fa fa-angle-up" style="font-size: 30px;"></i></button>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="/js/scroll-up.js"></script>
 <script>
   'use strict'

   $.validate({
    lang: 'en',
    borderColorOnError : '#FF0000',
  addValidClassOnAll : true,
  });

   $(document).ready(function(){

$('.carousel').carousel({
  wrap:false
});

     $('.carousel').carousel('pause');



  
   });
 </script>
  </body>
</html>