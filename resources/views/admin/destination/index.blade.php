@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <div class="container pt-3 pt-lg-5">
            <div class="row justify-content-center">

                <div class="col-md-8 mb-3">
                    <div class="section-header fw-bold fs-4">
                        List Destination
                    </div>
                </div>


                <div class="col-md-8 mb-3">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card p-3">
                        <div class="card-body">

                            <div class="mb-2">
                                <a href="{{ route('destination.create') }}" class="btn btn-primary text-light">Add
                                    Destination</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Location</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destination as $item)
                                        <tr>
                                            <td>{{ $item->location }}</td>
                                            <td>
                                                <form action="{{ route('destination.destroy', $item->id) }}" method="Post">
                                                    <a class="btn btn-sm btn-success me-2" title="Edit Transaksi"
                                                        href="{{ route('destination.edit', $item->id) }}"><i
                                                            class="bi bi-pencil-square me-2"></i>Edit</a>
                                                    {{-- <a class="btn btn-sm btn-success me-2"
                                                        href="{{ route('transaksi.show', $item->id) }}"><i class="bi bi-eye me-2"></i></i>Detail</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger me-2"><i
                                                            class="bi bi-trash me-2"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $feature->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
