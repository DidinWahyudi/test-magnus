@extends('layouts.app')

@section('content')
    <section class="mt-5">
        {{-- section hero --}}
        <div class="container pt-3 pt-lg-5">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="section-header fw-bold fs-4">
                        Hero Content
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Sub Title Hero
                            </div>
                            <div>
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light px-4">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-2">
                                <p style="color:grey; font-size: 1rem;">{!! $subTitleHero->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                Title Hero
                            </div>
                            <div>
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light px-4">Edit</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-2">
                                <p style="color:grey; font-size: 1rem;">{!! $titleHero->content !!}</p>
                            </div>
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
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light px-4">Edit</a>
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
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light px-4">Edit</a>
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
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light px-4">Edit</a>
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
