@extends('layout.app')
@section('content')
    <!--Banner-->
<figure>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-offset-2">
          <div class="banner_wrapper">
            <h1>Privacy Policy</h1>
            <p>In elementum tempor libero sit amet volutpat. quisque condimentum dui vel tortor
              dignissim rhoncus nunc lacinia maximus magna facilisis eleifend</p>
          </div>
        </div>
      </div>
    </div>
  </figure>
  <!--End-->
  <!--breadcrumb-->
  <figcaption >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb">
            <li>Home</li>
            <li><span>Privacy Policy</span></li>
          </ul>
        </div>
      </div>
    </div>
  </figcaption>
  <!--End-->
  <!--Content-->
  <!--Latest News-->
  <section >
    <div class="container">
      <div class="row latest">
        <div class="col">
          <h2>Latest News</h2>
          @php ($i = 0)
          @foreach ($posts as $post)
          <div class="card blog-card">
            <img src="images/img5.jpg" class="card-img-top">
              <div class="blog-card-body card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{ str_limit($post->body, $limit = 150, $end = '...') }}</p>
              </div>
          </div>
          @if (($posts->count()-1) != $i)
          <div class="clearfix redspacer"></div>
          @else
          <div class="clearfix blankspacer"></div>
          @endif
          @php ($i++)
          @endforeach
          {{ $posts->links() }}
        </div>
        <div class="col-12">
            <div class="bottom-content-image"></div>
        </div><!-- /.col-12 -->
      </div>
    </div>
  </section>
  <!--End-->
  <!--End-->
@endsection
