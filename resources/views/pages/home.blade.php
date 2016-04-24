@extends('pages.index')

@section('title')
    {{ 'Home' }}
@stop

@section('body-content')

    <div id="carousel-example-generic" class="carousel slide carousel-fade">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
            </li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item active">
                <div class="carousel-caption">
                    <div data-animation="animated fadeInRightBig">
                        <h2 class="h2-responsive">
                            Do you want Unhealthy Food</h2>
                        <a href="{{ url('/menu-order') }}" class="btn btn-primary waves-effect waves-light">Go to Menu</a>
                    </div>
                </div>
            </div>
            <!-- /.item -->

            <!-- Second slide -->
            <div class="item">
                <div class="carousel-caption">
                    <div data-animation="animated fadeInDownBig">
                        <h2 class="h2-responsive">Do you Want Slightly Healthy Food</h2>
                        <a href="{{ url('/menu-order') }}" class="btn btn-primary waves-effect waves-light">Go to Menu</a>
                    </div>
                </div>
            </div>
            <!-- /.item -->

            <!-- Third slide -->
            <div class="item">
                <div class="carousel-caption">
                    <div data-animation="animated fadeInLeftBig">
                        <h2 class="h2-responsive">Do you want Healthy and lovely food.</h2>
                        <a href="{{ url('/menu-order') }}" class="btn btn-primary waves-effect waves-light">Go to Menu</a>
                    </div>
                </div>
            </div>
            <!-- /.item -->

        </div>
        <!-- /.carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa fa-angle-left waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa fa-angle-right waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
        </a>

    </div>
    <!-- Page content -->
    <div class="container page-content">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="img/page-content-img3.jpg">
                        <span class="card-title">Video Maker</span>
                    </div>
                    <div class="card-content">
                        <p>Some things just look better in motion and in the highly competitive world of fashion, finding an edge over the competition...</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('/menu-order') }}">
                            <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="img/page-content-img2.jpg">
                        <span class="card-title">Creative Agency</span>
                    </div>
                    <div class="card-content">
                        <p>Did you know that a strong brand is absolutely essential for generating sales and growth on Social Media? You may...</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('/menu-order') }}">
                            <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="img/page-content-img1.jpg">
                        <span class="card-title">Photographer Portfolio</span>
                    </div>
                    <div class="card-content">
                        <p>Photography is an art of observation. It�s about finding something interesting an ordinary place� I�ve found it has little to do with ...</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('/menu-order') }}">
                            <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

    </div>


@stop

