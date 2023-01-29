@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="font-weight: bold;">
                            <div style="font-size: 1.1rem;">
                                @if (@$destination->exists)
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
                                Destination
                            </div>

                        </div>
                        <div class="card-body">
                            @if (@$destination->exists)
                                <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="{{ route('destination.update', $destination) }}">
                                    @method('put')
                                @else
                                    <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                        action="{{ route('destination.store') }}">
                            @endif
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="location"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                                <div class="col-md-6">
                                    <input id="location" type="text"
                                        class="form-control @error('location') is-invalid @enderror" name="location"
                                        value="{{ old('location', @$destination->location) }}" required
                                        autocomplete="location" autofocus>
                                    @error('location')
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
                                    <a href="{{ route('destination') }}" class="btn btn-sm btn-secondary me-2 px-4">
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
