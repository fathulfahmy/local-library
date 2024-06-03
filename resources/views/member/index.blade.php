@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Members</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('member.index') }}">member</a></li>
                    <li class="breadcrumb-item active">index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{ route('member.create') }}" class="btn btn-primary rounded-lg">Add members</a>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Showing all members</h5>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>IC</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Contact</th>
                    </tr>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->icNum }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->email }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $members->links() }}
            </div>
        </div>

    </div>
@endsection
