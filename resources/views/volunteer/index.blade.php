@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Volunteers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('volunteer.index') }}">volunteer</a></li>
                    <li class="breadcrumb-item active">index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @can('create-volunteers', App\Models\User::class)
            <a href="{{ route('volunteer.create') }}" class="btn btn-primary">Add volunteers</a>
        @endcan

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Showing all volunteers</h5>
                <table class="table table-striped">
                    <tr>
                        <th>Vol. ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($volunteers as $volunteer)
                        <tr>
                            <td>{{ $volunteer->id }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->email }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $volunteers->links() }}
            </div>
        </div>
    </div>
@endsection
