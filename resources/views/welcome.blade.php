@extends('layouts.app')

@section('content')
    <section class="section-hero" style="background: url('{{ asset('images/img-gradient.jpg') }}');">
        <div class="container py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Lifre is short <br>and the world 🌏 <br>is wide! 🏖️</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a type="button" class="btn btn-primary px-4 me-md-2">Primary</a>
                        <a type="button" class="btn btn-outline-secondary px-4">Default</a>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection
