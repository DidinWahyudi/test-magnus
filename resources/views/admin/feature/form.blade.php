@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                @if (@$feature->exists)
                                    Update
                                    @php
                                        $aksi = 'Update';
                                    @endphp
                                @else
                                    Add
                                    @php
                                        $aksi = 'Submit';
                                    @endphp
                                @endif
                                Feature
                            </div>

                        </div>

                        <div class="card-body">
                            @if (@$feature->exists)
                                <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="{{ route('feature.update', $feature) }}">
                                    @method('put')
                                @else
                                    <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                        action="{{ route('feature.store') }}">
                            @endif
                            {{ csrf_field() }}

                            @if (@$feature->exists)
                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end">Old Image</label>
                                    <div class="col-md-6">
                                        <img src="{{ asset($feature->image) }}" alt="Old Image" width="100">
                                    </div>
                                </div>

                                <input id="imageold" type="text" name="imageold"
                                    value="{{ old('imageold', @$feature->image) }}" hidden>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end">New Image</label>
                                    <div class="col-md-6">
                                        <input id="image" type="file"
                                            class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ old('image', @$feature->image) }}" autocomplete="location" autofocus>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                                    <div class="col-md-6">
                                        <input id="image" type="file"
                                            class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ old('image', @$feature->image) }}" required autocomplete="location"
                                            autofocus>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Titile</label>
                                <div class="col-md-6">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title', @$feature->title) }}" required autocomplete="title"
                                        autofocus>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Description</label>
                                <div class="col-md-6">
                                    <input id="desc" type="text"
                                        class="form-control @error('desc') is-invalid @enderror" name="desc"
                                        value="{{ old('desc', @$feature->desc) }}" required autocomplete="desc" autofocus>
                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm px-4">
                                        {{ $aksi }}</button>
                                    <a href="{{ route('feature') }}" class="btn btn-secondary btn-sm me-2 px-4">
                                        Back</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
