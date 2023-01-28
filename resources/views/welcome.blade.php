@extends('layouts.app')

@section('content')
    <section class="section-hero">
        {{-- hero --}}
        <div class="container py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-lg-7">
                    <p class="" style="color:grey; font-size: 1rem;">The vacation you deserve is closer than you think
                        😍</p>
                    <h1 class="mb-4" style="font-size: 4rem;">Lifre is short <br>and the world 🌏 <br>is wide! 🏖️</h1>
                    <div class="card card-form-destinantion p-3">
                        <form action="">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="form-floating me-3" style="width: 100%;">
                                    <select class="form-select" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelectGrid">Location</label>
                                </div>
                                <div class="form-floating me-3" style="width: 100%;">
                                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Date</label>
                                </div>
                                <div class="form-floating me-3" style="width: 100%;">
                                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Return</label>
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
                    <p class="" style="color:#ffa335; font-size: 1rem; font-weight: bold;">WHTA WE SERVE</p>
                    <h1 class="mb-3">Top Falues <br>For You 🔥</h1>
                    <p class="" style="color:grey; font-size: 1rem;">Try a variety of benefits when <br>using our
                        services.</p>
                </div>
            </div>
        </div>

        {{-- end fiture --}}
    </section>
@endsection
