@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <div class="section-header fw-bold fs-4">
                        @if (@$destination->exists)
                            Update
                            @php
                                $aksi = 'Edit';
                            @endphp
                        @else
                            Add
                            @php
                                $aksi = 'Tambah';
                            @endphp
                        @endif
                        Destination
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card p-3">
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
                                    {{-- <a href="{{ route('transaksi') }}" class="btn btn-secondary me-2 slide_right">
                                    Back</a> --}}
                                    <button type="submit" class="btn btn-primary  slide_right">
                                        {{ $aksi }}</button>
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
