@extends('layout.app')
@section('content')

<img class="img-fluid" src="{{asset('storage/images/footer-image-1.png')}}" alt="note-it!">

    <!-- Home Section -->
    <section id="about-us" class="pt-5 pb-5">
      <div class="container" style="background-color: #FAF7F0;">
        <div class="col text-center mt-5 mb-5">
          <h1 style="color: black !important; font-size: 65px !important;"><b>Made note-taking simple <br> using <span style="color: #98A8F8;"><b><i>NoteIt!</i></b></span></b></h1>
        </div>

        <div class="col text-center mt-3 mb-4">
          <p style="color: rgb(32, 32, 32) !important">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae odio quas labore eius iste, asperiores sint a iure alias voluptate cumque mollitia harum repellat eveniet voluptatem optio, laudantium veniam! Eveniet?lorem
          </p>
          <p class="mt-4" style="color: rgb(32, 32, 32) !important"><b>Simple | Friendly | Colorful</b></p>
          <a href="/register" class="btn btn-start mt-3" style="font-size: 18px;"><b>Get Started!</b></a>
        </div>
      </div>
    </section>

    <img class="img-fluid" src="{{asset('storage/images/footer-image-2.png')}}" alt="note-it!">

@endsection