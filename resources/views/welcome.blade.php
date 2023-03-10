@extends('layouts.app')

@section('content')
    <section class="section-hero">
        {{-- hero --}}
        <div class="container py-5">
            <div class="row align-items-top py-5">
                <div class="col-lg-7 mt-5 pt-5 hero-text">
                    <p class="sub-title-hero" style="color:grey;">{!! $subTitleHero->content !!}</p>

                    <h1 class="mb-5 title-hero">{!! $titleHero->content !!}
                        <div class="camera">
                            <img src="{{ asset('images/cam.png') }}" alt="camera">
                        </div>
                    </h1>
                </div>
                <div class="col-lg-5 image-hero">
                    <div class="bubble-1 p-3">
                        <img src="{{ asset('icons/airplane.png') }}" alt="bubble" style="height: 45px;">
                    </div>
                    <div class="image-travel-front">
                        <img src="{{ asset($imageFront->image) }}" class="d-block mx-lg-auto img-fluid" alt="Images"
                            loading="lazy">
                    </div>
                    <div class="map-poin"><img src="{{ asset('images/map-poin.png') }}" alt=""></div>
                    <div class="bubble-2 p-3">
                        <img src="{{ asset('icons/mountains.png') }}" alt="bubble" style="height: 45px;">
                    </div>
                    <div class="bubble-3 p-3">
                        <img src="{{ asset('icons/ship.png') }}" alt="bubble" style="height: 45px;">
                    </div>
                    <div class="image-travel-back">
                        <img src="{{ asset($imageBack->image) }}" class="d-block mx-lg-auto img-fluid" alt="Images"
                            loading="lazy">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 destinantion-form">
                    <div class="card-form-destinantion p-3">
                        <form action="#">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="location d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Map_Pin.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelectLocation"
                                            aria-label="Floating label select">
                                            <option selected="true" disabled="disabled" value="">Select travel
                                                destination</option>
                                            @foreach ($destination as $item)
                                                <option value="{{ $item->id }}" data-barang="{{ $item->stok }}">
                                                    {{ $item->location }}</option>
                                            @endforeach
                                        </select>
                                        <label for="floatingSelectLocation">Location</label>
                                    </div>
                                </div>
                                <hr class="d-block d-lg-none">
                                <div class="garis-vertical d-none d-lg-block"></div>
                                <div class="d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Calendar_Days.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingDate">
                                        <label for="floatingDate">Date</label>
                                    </div>
                                </div>
                                <hr class="d-block d-lg-none">
                                <div class="garis-vertical d-none d-lg-block"></div>
                                <div class="d-flex align-items-center" style="width: 100%;">
                                    <div>
                                        <img src="{{ asset('icons/Calendar_Days.png') }}" alt="">
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingReturn">
                                        <label for="floatingReturn">Return</label>
                                    </div>
                                </div>
                                <hr class="d-block d-lg-none">
                                <div>
                                    <button class="btn-search d-none d-lg-block">
                                        <img src="{{ asset('icons/Search.png') }}" alt="">
                                    </button>

                                    <button class="mt-3 btn btn-lg btn-primary d-block d-lg-none text-light">
                                        <img class="me-2" src="{{ asset('icons/Search.png') }}" alt="Icon">
                                        Search
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
            <div class="row align-items-top">
                <div class="col-12 col-lg-3">
                    <p style="color:#ffa335; font-size: 1rem; font-weight: bold;">{!! $subTitleFeature->content !!}</p>
                    <h1 class="mb-3">{!! $titleFeature->content !!}</h1>
                    <p class="sub-title-hero" style="color:grey;">{!! $contentFeature->content !!}</p>
                </div>

                <div class="col-12 col-lg-9 row feature-list">

                    @foreach ($feature as $item)
                        <div class="feature-item col-lg-4 px-3">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                                <img src="{{ asset($item->image) }}" alt="Icon" style="height: 60px;">
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p class="sub-title-hero" style="color:grey;">{{ $item->desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- end fiture --}}
    </section>
@endsection
