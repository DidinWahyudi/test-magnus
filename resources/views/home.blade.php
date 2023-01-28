@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="section-header fw-bold fs-4">
                            Dashboard
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card p-3">
                        <div class="card-body">

                            <div class="mb-2">
                                <a href="{{ route('feature.create') }}" class="btn btn-primary text-light">Add
                                    Feature</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
