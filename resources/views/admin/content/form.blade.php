@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <div class="section-header fw-bold fs-4">
                        Update Cpontent
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="card p-3">

                        <div class="card-body">

                            <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                action="{{ route('content.update', $content) }}">
                                @method('put')

                                {{ csrf_field() }}



                                @if (isset($content->content))
                                    <div class="row mb-3">
                                        <label for="desc" class="col-md-4 col-form-label text-md-end">Content</label>
                                        <div class="col-md-6">
                                            <input id="content" type="text"
                                                class="form-control @error('desc') is-invalid @enderror" name="content"
                                                value="{{ old('content', @$content->content) }}" required
                                                autocomplete="content" autofocus>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    @if (@$content->exists)
                                        <div class="row mb-3">
                                            <label for="image" class="col-md-4 col-form-label text-md-end">Old
                                                Image</label>
                                            <div class="col-md-6">
                                                <img src="{{ asset($content->image) }}" alt="Old Image" width="100">
                                            </div>
                                        </div>

                                        <input id="imageold" type="text" name="imageold"
                                            value="{{ old('imageold', @$content->image) }}" hidden>

                                        <div class="row mb-3">
                                            <label for="image" class="col-md-4 col-form-label text-md-end">New
                                                Image</label>
                                            <div class="col-md-6">
                                                <input id="image" type="file"
                                                    class="form-control @error('image') is-invalid @enderror" name="image"
                                                    value="{{ old('image', @$feature->image) }}" autocomplete="location"
                                                    autofocus>
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
                                                    value="{{ old('image', @$feature->image) }}" required
                                                    autocomplete="location" autofocus>
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary  slide_right px-4">
                                            Update</button>
                                        <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2 px-4">
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
