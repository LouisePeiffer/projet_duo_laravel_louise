@extends('layouts.index')

@section('content')

    @include('partial.headerbis')

    <main id="main" class="site-main">

        <section class="site-section-small section-blog">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-title-big">Blog</h1>
                    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog</li>
                </ol><!-- /.breadcrumb -->
                <div class="row">
                    <div class="col-md-9">
                        {{-- FOREACH --}}
                        @foreach ($varBlog as $blog)
                            <div class="blog-post">
                                <a href="blog-post.html"><img class="img-carousel post-img" src={{$blog->image}} alt=""></a>
                                <div class="post-content">
                                    <h3><a class="post-title" href="blog-post.html">{{$blog->titre}}</a></h3>
                                    <p class="section-text">{{$blog->texte}}</p>
                                </div><!-- /.post-content -->
                            </div><!-- /.blog-post -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /.section-blog -->

    </main><!-- /.site-main -->

@endsection