@extends('plantillas.1001.admin')
@section('1001')
<section class="breadcrumbs-custom"  style="margin-top: 150px !important;">
    <div class="parallax-container" data-parallax-img="{{asset('themes/1001/images/bg-about.jpg')}}">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 class="breadcrumbs-custom-title">Blog Post</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li class="active">Blog Post</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Shop-->
  <section class="section section-xl bg-default text-md-left">
    <div class="container">
      <div class="row row-50 row-md-60">
        <div class="col-lg-8 col-xl-9">
          <div class="inset-xl-right-100">
            <div class="row row-50 row-md-60 row-lg-80">
              <div class="col-12">
                <article class="post post-modern box-xxl">
                  <div class="post-modern-panel">
                    <div><a class="post-modern-tag" href="#">News</a></div>
                  </div>
                  <h3 class="post-modern-title">{{$blog->titulo}}</h3>
                  <div class="post-modern-figure"><img src="images/post-17-800x394.jpg" alt="" width="800" height="394"/>
                  </div>
                  <p class="post-modern-text"><?php echo $blog->contenido?></p>
                  
                </article>
                <!-- Quote Classic-->
                
               
              </div>
              
              
             
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-3">
          <div class="aside row row-30 row-md-50 justify-content-md-between">
            <div class="aside-item col-12">
              <div class="team-info box-sm"><a class="team-info-figure" href="#"><img src="images/user-4-123x123.jpg" alt="" width="123" height="123"/></a>
                <h6 class="team-info-title"><a href="#">Rebecca Harrison</a></h6>
                <p class="team-info-text">Sed eleifend, lacus nec bibendum pulvinar, nibh mauris vehicula augue</p>
              </div>
              <!-- RD Search Form-->
              <form class="rd-search form-search" action="search-results.html" method="GET">
                <div class="form-wrap">
                  <label class="form-label" for="search-form">Search...</label>
                  <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                  <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                </div>
              </form>
            </div>
            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
              <h6 class="aside-title">Categories</h6>
              <ul class="list-categories">
                <li><a href="#">All</a><span class="list-categories-number">(18)</span></li>
                <li><a href="#">News</a><span class="list-categories-number">(9)</span></li>
                <li><a href="#">Diving</a><span class="list-categories-number">(5)</span></li>
                <li><a href="#">Tips</a><span class="list-categories-number">(8)</span></li>
              </ul>
            </div>
            <div class="aside-item col-sm-6 col-lg-12">
              <h6 class="aside-title">Latest Posts</h6>
              <div class="row row-20 row-lg-30 gutters-10">
                <div class="col-6 col-lg-12">
                  <!-- Post Minimal-->
                  <article class="post post-minimal">
                    <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                      <div class="unit-left"><a class="post-minimal-figure" href="blog-post.html"><img src="images/post-mini-1-260x254.jpg" alt="" width="260" height="254"/></a></div>
                      <div class="unit-body">
                        <p class="post-minimal-title"><a href="blog-post.html">Top 5 Places to Learn Diving for Beginners</a></p>
                        <div class="post-minimal-time">
                          <time datetime="2019-03-15">March 15, 2019</time>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-6 col-lg-12">
                  <!-- Post Minimal-->
                  <article class="post post-minimal">
                    <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                      <div class="unit-left"><a class="post-minimal-figure" href="blog-post.html"><img src="images/post-mini-2-260x254.jpg" alt="" width="260" height="254"/></a></div>
                      <div class="unit-body">
                        <p class="post-minimal-title"><a href="blog-post.html">The Wonders of Papua New Guinea</a></p>
                        <div class="post-minimal-time">
                          <time datetime="2019-03-15">March 15, 2019</time>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
              <h6 class="aside-title">Popular tags</h6>
              <div class="group-sm group-tags"><a class="link-tag" href="#">News</a><a class="link-tag" href="#">Diving</a><a class="link-tag" href="#">Destinations</a><a class="link-tag" href="#">Tips</a><a class="link-tag" href="#">Equipment</a><a class="link-tag" href="#">Tours</a></div>
            </div>
            <div class="aside-item col-sm-6 col-lg-12">
              <h6 class="aside-title">Archive</h6>
              <ul class="list-marked list-archives d-inline-block d-md-block">
                <li><a href="#">March 2019</a></li>
                <li><a href="#">February 2019</a></li>
                <li><a href="#">January 2019</a></li>
                <li><a href="#">December 2019</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection