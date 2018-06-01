@extends('layouts.app',['myTitle'=>'Home'])
@section('content')
    <!-- Page Content -->
    <header hidden>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/ux_developer_2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/ux_developer_2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/ux_developer_2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="container">

        {{--<div class="row mt-4 mb-3">--}}
            {{--<div class="col-6 my-auto">--}}
        <h1 class="mt-4 mb-3 text-dark">Home</h1>
        <h2 class="mt-4 mb-3 text-dark">Latest Posts</h2>
            {{--</div>--}}
            {{--<div class="col-6 my-auto">--}}
                {{--<a href="{{route('route.blog')}}" class="btn btn-primary pull-right">See More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi ipsam sed? Accusantium adipisci aperiam, atque corporis deserunt earum est fugiat itaque magni maxime nobis ratione repellat, sint ullam vitae.</p>
        <!-- Courses Component -->
        <posts></posts>

        {{--<div class="row mt-4 mb-3">--}}
            {{--<div class="col-6 my-auto">--}}
                <h2 class="mt-4 mb-3 text-dark">Favorites Courses</h2>
            {{--</div>--}}
            {{--<div class="col-6 my-auto">--}}
                {{--<a href="{{route('route.blog')}}" class="btn btn-primary pull-right">See More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dicta ducimus necessitatibus possimus ratione sed soluta suscipit temporibus. Accusamus architecto consequuntur error ex ipsum modi nihil quae totam velit, veniam?</p>
        <!-- Courses Component -->
        <courses></courses>

        <!-- Portfolio Section -->
        {{--<div class="row mt-4 mb-3">--}}
            {{--<div class="col-6 my-auto">--}}
                <h2 class="mt-4 mb-3 text-dark">Updated Portfolio</h2>
            {{--</div>--}}
            {{--<div class="col-6 my-auto">--}}
                {{--<a href="{{route('route.portfolio')}}" class="btn btn-primary pull-right">See More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dicta ducimus necessitatibus possimus ratione sed soluta suscipit temporibus. Accusamus architecto consequuntur error ex ipsum modi nihil quae totam velit, veniam?</p>
        <!-- Portfolio component -->
        <portfolio></portfolio>

        <!-- Features Section -->
        <div class="row mt-4">
            <div class="col-lg-6">
                <h2 class="text-dark">Hi, This my Website</h2>
                <p>En este sitio web encontrarás mucha información tecnológica para desarrolladores y para pesonas que sientan una atracción por la tecnología.</p>
                <p>Tecnologías como pueden ser:</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <ul>
                            <li>Bootstrap v4</li>
                            <li>JQuery</li>
                            <li>Font Awesome</li>
                            <li>Vue 2</li>
                            <li>Angular 6</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <ul>
                        <li>React</li>
                        <li>Laravel Framework</li>
                        <li>Lumen Micro Framework</li>
                        <li>Node</li>
                        <li>Sails Framework</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded img-thumbnail" src="{{asset('images/dia.png')}}" alt="">
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="row mt-4 mb-4">
            <div class="col-md-6">
                <p class="text-secondary">Si estás interesado en nuestros articulos y quieres obtener mas información, suscríbete a nuestro boletin de servicio informativo y entérate de más.</p>
            </div>
            <div class="col-md-6 my-auto">
                <form action="">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection