@extends('layouts.app')

@section('content')
    <section class="mt-5">
        {{-- section hero --}}
        <div class="container pt-3 pt-lg-5">
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="col-md-12 mb-3">
                    <div class="section-header fw-bold fs-4">
                        Hero Content
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Image Hero
                            </div>
                        </div>
                        <div class="card-body p-3 d-flex align-items-center">
                            <img src="{{ asset($imageFront->image) }}" class="img-asset-dshboard me-3" alt="Images"
                                loading="lazy" style="height: 100px; width:100px;">
                            <div>
                                <div style="font-size: 1rem; font-weight:bold">
                                    Image Front
                                </div>
                                <p class="me-3 mb-1" style="color:grey; font-size: 1rem;">{{ $imageFront->image }}</p>
                                <div>
                                    <a class="btn btn-sm btn-primary px-4 text-light"
                                        href="{{ route('content.edit', $imageFront->id) }}">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 d-flex align-items-center">
                            <img src="{{ asset($imageBack->image) }}" class="img-asset-dshboard me-3" alt="Images"
                                loading="lazy" style="height: 100px; width:100px;">
                            <div>
                                <div style="font-size: 1rem; font-weight:bold">
                                    Image Back
                                </div>
                                <p class="me-3 mb-1" style="color:grey; font-size: 1rem;">{{ $imageBack->image }}</p>
                                <div>
                                    <a class="btn btn-sm btn-primary px-4 text-light"
                                        href="{{ route('content.edit', $imageBack->id) }}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Sub Title Hero
                            </div>
                            <div>
                                <a class="btn btn-sm btn-primary px-4 text-light"
                                    href="{{ route('content.edit', $subTitleHero->id) }}">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p style="color:grey; font-size: 1rem;">{!! $subTitleHero->content !!}</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Title Hero
                            </div>
                            <div>
                                <a class="btn btn-sm btn-primary px-4 text-light"
                                    href="{{ route('content.edit', $subTitleHero->id) }}">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p style="color:grey; font-size: 1rem;">{!! $titleHero->content !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- end section hero --}}

        {{-- section feature --}}
        <div class="container pt-3 pt-lg-5">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="section-header fw-bold fs-4">
                        Feature Content
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Sub Title Feture
                            </div>
                            <div>
                                <a class="btn btn-sm btn-primary px-4 text-light"
                                    href="{{ route('content.edit', $subTitleFeature->id) }}">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-2">
                                <p style="color:grey; font-size: 1rem;">{!! $subTitleFeature->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Title Feature
                            </div>
                            <div>
                                <a class="btn btn-sm btn-primary px-4 text-light"
                                    href="{{ route('content.edit', $titleFeature->id) }}">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-2">
                                <p style="color:grey; font-size: 1rem;">{!! $titleFeature->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Content Feature
                            </div>
                            <div>
                                <a class="btn btn-sm btn-primary px-4 text-light"
                                    href="{{ route('content.edit', $contentFeature->id) }}">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-2">
                                <p style="color:grey; font-size: 1rem;">{!! $contentFeature->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end section feature --}}
    </section>
@endsection
