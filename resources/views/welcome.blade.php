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
                    <div class="card card-form-destinantion p-3 ">
                        <form action="">
                            <div class="d-lg-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Map_Pin.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelectGrid">Location</label>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Calendar_Days.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Date</label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Calendar_Days.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Date</label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn-search">
                                        <img src="{{ asset('icons/Search.png') }}" alt="">
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5 image-hero">
                    <div class="image-travel-front">
                        <img src="{{ asset('images/img-new-travel-1.jpg') }}" class="d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" loading="lazy">
                    </div>

                    <div class="image-travel-back">
                        <img src="{{ asset('images/travel-2.jpg') }}" class="d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        {{-- end hero --}}

        {{-- fiture --}}
        <div class="container py-5">
            <div class="row align-items-top g-5 py-5">
                <div class="col-lg-3">
                    <p style="color:#ffa335; font-size: 1rem; font-weight: bold;">WHTA WE SERVE</p>
                    <h1 class="mb-3">Top Falues <br>For You 🔥</h1>
                    <p style="color:grey; font-size: 1rem;">Try a variety of benefits when <br>using our
                        services.</p>
                </div>

                <div class="feature col-lg-3">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="{{ asset('icons/destination.png') }}" alt="Icon" style="height: 60px;">
                    </div>
                    <h3>Lot Of Choices</h3>
                    <p style="color:grey; font-size: 1rem;">Total 450+ destinations that we work with.</p>
                </div>

                <div class="feature col-lg-3">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="{{ asset('icons/luggage.png') }}" alt="Icon" style="height: 60px;">
                    </div>
                    <h3>Best Tour Guide</h3>
                    <p style="color:grey; font-size: 1rem;">Out tour guide 15+ years experience.</p>
                </div>

                <div class="feature col-lg-3">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="{{ asset('icons/postcard.png') }}" alt="Icon" style="height: 60px;">
                    </div>
                    <h3>Easy Booking</h3>
                    <p style="color:grey; font-size: 1rem;">With an easy and fast ticket purchase process.</p>
                </div>
            </div>
        </div>
        {{-- end fiture --}}
    </section>
@endsection
