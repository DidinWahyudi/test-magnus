@extends('layouts.app')

@section('content')
    <section class="section-hero">
        {{-- hero --}}
        <div class="container py-5" style="min-height: 100vh">
            <div class="row align-items-center g-5 py-5">
                <div class="col-lg-7">
                    <p class="" style="color:grey; font-size: 1.1rem;">The vacation you deserve is closer than you think
                        😍</p>
                    <h1 class="mb-4" style="font-size: 4rem;">Lifre is short <br>and the world 🌏 <br>is wide! 🏖️</h1>
                    <div class="card card-form-destinantion p-3">
                        <form action="">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="form-floating me-2">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating me-2">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating me-2">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
        {{-- end hero --}}

        {{-- fiture --}}
        <div class="container py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-lg-3">
                    <h1 class="mb-3">Top Falues <br>For You 🔥</h1>
                </div>

            </div>
        </div>
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Columns with icons</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection"></use>
                        </svg>
                    </div>
                    <h3 class="fs-2">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                    </div>
                    <h3 class="fs-2">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2"></use>
                        </svg>

                    </div>

                    <h3 class="fs-2">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>


        {{-- end fiture --}}
    </section>
@endsection
