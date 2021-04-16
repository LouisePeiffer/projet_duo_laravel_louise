@extends('layouts.index')

@section('content')

    @include('partial.headerthree')

    <main id="main" class="site-main">
        <section class="site-section-small portfolio">
            <div class="container">
                <h1 class="section-title-big text-center">Portfolio</h1>
            </div>
            <div class="container-fluid">
                <div class="row" id="grid">
                    {{-- FOREACH --}}
                    @foreach ($varPortfolio as $portfolio)
                        <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        {{-- <div class="col-lg-fifth col-md-fifth col-sm-fifth col-xs-fifth" data-groups='["uiux"]'> --}}
                            <a class="portfolio-link" href="#">
                                <img src={{$portfolio->image}} alt="" class="img-carousel">
                                <div class="portfolio-info">
                                    <div class="portfolio-info-top">
                                        <h3>{{$portfolio->titre}}</h3>
                                    </div><!-- /.portfolio-info-top -->
                                    <div class="portfolio-info-bottom">
                                        <p>{{$portfolio->texte}}</p>
                                    </div><!-- /.portfolio-info-bottom -->
                                </div><!-- /.portfolio-info  -->
                            </a>
                        </div><!-- /.col-lg-fifth  -->
                    @endforeach
                </div><!-- /#grid -->
            </div>
        </section><!-- /.portfolio -->

        <section class="site-section-small section-work-with-us yellow-bg text-center">
            <div class="container">
                <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
                <a class="btn" href="#">Start Now</a>
            </div>
        </section><!-- /.section-work-with-us -->

    </main><!-- /.site-main -->

@endsection