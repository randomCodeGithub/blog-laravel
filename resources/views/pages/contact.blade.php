
@extends('layouts.main')

@section('content')

    <section class="mt-6 ">
        <div class="container bg-grey">
            <div class="row py-2">
                <div class="col">
                    <h2 class="text-center">Contact me</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <iframe class="shadow"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.0513147637616!2d24.137202815892735!3d56.96505348089491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece4b329a22b5%3A0x3d51fc84e255c74b!2zQ8STc3UgaWVsYSAxNywgVmlkemVtZXMgcHJpZWvFoXBpbHPEk3RhLCBSxKtnYSwgTFYtMTAxMg!5e0!3m2!1sru!2slv!4v1588099047909!5m2!1sru!2slv"
                        width="100%" height="100%" frameborder="0" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="/contact-us" method="POST" id="basic-form">
                        @csrf
                        <div class="card rounded-0 shadow">
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user-circle-o"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nameValue" name="name"
                                            placeholder="Your name" data-validation="length alphanumeric" 
                                            data-validation-length="2-30" 
                                            data-validation-error-msg="User name has to be an alphanumeric value (2-30 chars)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input class="form-control" id="nombre" name="email" data-validation="email"
                                            placeholder="E-mail">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment card-title"></i></div>
                                        </div>
                                        <textarea name="question" class="form-control" data-validation="required"  id="messageValue" placeholder="Message..."
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" id="sendButton" value="Send"
                                        class="btn bg-dark btn-block rounded-0 py-2 text-light">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
            </div>
            <div class="row px-3">
                <div class="bg-light mb-4 shadow">
                   <div class="col-12">
                    <h2 class="text-center">About us</h2>
                </div> 
                <div class="col-12">
                    <p>

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).

                    </p>
                </div>
                </div>
                
            </div>
        </div>
    </section>

    @endsection

    @section('title', "Contact us")