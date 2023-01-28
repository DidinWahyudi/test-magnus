@extends('layouts.app')

@section('content')
    <section class="section-hero">
        {{-- hero --}}
        <div class="container py-5">
            <div class="row align-items-top py-5">
                <div class="col-lg-7 mt-5">
                    <p class="" style="color:grey; font-size: 1rem;">The vacation you deserve is closer than you think
                        😍</p>
                    <h1 class="mb-4" style="font-size: 4rem;">Lifre is short <br>and the world 🌏 <br>is wide! 🏖️</h1>

                </div>
                <div class="col-lg-5 image-hero">
                    <div class="bubble-1 p-3">
                        <img src="{{ asset('icons/airplane.png') }}" alt="bubble" style="height: 45px;">
                    </div>
                    <div class="image-travel-front">
                        <img src="{{ asset('images/img-new-travel-1.jpg') }}" class="d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" loading="lazy">
                    </div>

                    <div class="bubble-2 p-3">
                        <img src="{{ asset('icons/mountains.png') }}" alt="bubble" style="height: 45px;">
                    </div>

                    <div class="bubble-3 p-3">
                        <img src="{{ asset('icons/ship.png') }}" alt="bubble" style="height: 45px;">
                    </div>

                    <div class="image-travel-back">
                        <img src="{{ asset('images/travel-2.jpg') }}" class="d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" loading="lazy">
                    </div>
                </div>
                <div class="col-8 destinantion-form" style="margin-top: -300px;">
                    <div class="card-form-destinantion p-3 ">
                        <form action="">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center" style="width: 100%; margin-left:10px;">
                                    <div>
                                        <img src="{{ asset('icons/Map_Pin.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected="true" disabled="disabled" value="">Select travel
                                                destination</option>
                                            @foreach ($destination as $item)
                                                <option value="{{ $item->id }}" data-barang="{{ $item->stok }}">
                                                    {{ $item->location }}</option>
                                            @endforeach
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
                @foreach ($feature as $item)
                    <div class="feature col-lg-3">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                            <img src="{{ asset($item->image) }}" alt="Icon" style="height: 60px;">
                        </div>
                        <h3>{{ $item->title }}</h3>
                        <p style="color:grey; font-size: 1rem;">{{ $item->desc }}</p>
                    </div>
                @endforeach

            </div>
        </div>
        {{-- end fiture --}}
    </section>
@endsection
