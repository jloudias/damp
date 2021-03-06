@extends('layouts.app')

@section('content')
{{-- Carousel section--}}
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/slide_zika.jpg')}}" alt="Mosquito dengue">

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Todos contra a dengue.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide_ocorrencia.jpg')}}" alt="">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Livro de OcorrĂȘncias.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slide_senha.jpg')}}" alt="senha">

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Proteja sua senha.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- Marketing section --}}
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <p>
                <i class="bi-cash-coin marketing-icon"></i>
            </p>

            <h2>FinanĂ§as</h2>
            <p class="marketing-head">Some representative placeholder content for the three columns of text below the
                carousel. This is the
                first column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <p>
                <i class="bi-pencil-square marketing-icon"></i>
            </p>
            <h2>RelatĂłrios</h2>
            <p class="marketing-head">Another exciting bit of representative placeholder content. This time, we've moved
                on to the second
                column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <p>
                <i class="bi-calendar-plus marketing-icon"></i>
            </p>
            <h2>PrĂłximas AĂ§Ă”es</h2>
            <p class="marketing-head">And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    {{--
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">Itâll blow your
                    mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, itâs that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this
                layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                intended to be actually read, simply here to give you a better view of what this would look like with
                some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES --> --}}

</div><!-- /.container -->

{{-- Administrative Council section --}}

<div class="container council mt-5">
    <hr class="featurette-divider">
    <h2>Conselho &nbsp; Administrativo</h2>
    <div class="row text-center bg-light">
        <div class="col">
            <p>
                <img class="rounded-circle shadow p-1" alt="100x100" src="{{ asset('img/jorge_160x160.png')}}"
                    data-holder-rendered="true">
            </p>

            <div class="council-name">Hildebrando Alves de Oliveira</div>
            <p class="council-function">SĂ­ndico</p>

        </div><!-- /.col-lg-4 -->
        <div class="col">
            <p>
                <img class="rounded-circle shadow p-1" alt="100x100" src="{{ asset('img/jorge_160x160.png')}}"
                    data-holder-rendered="true">
            </p>
            <div class="council-name">JosĂ© Liberalino da NĂłbrega</div>
            <p class="council-function">SubsĂ­ndico</p>

        </div><!-- /.col-lg-4 -->

        <div class="col">
            <p>
                <img class="rounded-circle shadow p-1" alt="100x100" src="{{ asset('img/jorge_160x160.png')}}"
                    data-holder-rendered="true">
            </p>
            <div class="council-name">Jorge Loureiro Dias</div>
            <p class="council-function">Conselheiro</p>

        </div><!-- /.col-lg-4 -->
        <div class="col">
            <p>
                <img class="rounded-circle shadow p-1" alt="100x100" src="{{ asset('img/jorge_160x160.png')}}"
                    data-holder-rendered="true">
            </p>
            <div class="council-name">Fernanda Maria Lucena de Oliveira</div>
            <p class="council-function">Conselheiro</p>

        </div><!-- /.col-lg-4 -->
        <div class="col">
            <p>
                <img class="rounded-circle shadow p-1" alt="100x100" src="{{ asset('img/jorge_160x160.png')}}"
                    data-holder-rendered="true">
            </p>
            <div class="council-name">EugĂȘnio Cabral Pacelli da Costa</div>
            <p class="council-function">Conselheiro</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

</div>
<!-- Begin footer.inc -->
<footer class="footer">
    <div class="container">

        <div class="row">

            <div class="col">
                <p class="fs-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nemo non vero sint voluptas, nulla
                    libero eligendi possimus deleniti quo saepe error, provident nostrum dolorum, id ipsam, quisquam
                    praesentium pariatur.
                </p>
            </div>
            <div class="col"></div>
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.114463832188!2d-34.827858600000035!3d-7.112731899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd23606ca353%3A0xfcba3e76b328c985!2sR.+Isidro+Gomes%2C+435+-+Tamba%C3%BA%2C+Jo%C3%A3o+Pessoa+-+PB%2C+58039-160!5e0!3m2!1spt-BR!2sbr!4v1444134267159"
                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <p class="text-muted text-center">
            &copy;&nbsp;2015 - &nbsp;
            <a href="mailto:jloudias@gmail.com">Jorge LoureiroDias</a>
        </p>
    </div>
</footer>


@stop