@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Loans</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('loan.index') }}">loan</a></li>
                    <li class="breadcrumb-item active">index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{ route('loan.create') }}" class="btn btn-primary">Add loan records</a>

        <div class="card mt-3">
            <div class="card-body">

                <h5 class="card-title">{{ $title }}</h5>

                <form action="{{ route('loan.search') }}" method="GET" class="form-inline">
                    @csrf
                    <div class="input-group ">
                        <input type="search" name="searchkey" class="form-control">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <table class="table table-striped mt-3">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book title</th>
                        <th>Member IC</th>
                        <th>Member name</th>
                        <th>Borrowing</th>
                        <th colspan="2">Return</th>
                    </tr>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->borrowingDate }}</td>
                            <form action="{{ route('loan.update', $loan) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <td>
                                    <input type="date" name="returnDate" class="form-control">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Return</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach
                </table>
                {{ $loans->links() }}
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Showing all inactive loans</h5>
                <table class="table table-striped">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book title</th>
                        <th>Member IC</th>
                        <th>Member name</th>
                        <th>Borrowing</th>
                        <th>Return</th>
                    </tr>
                    @foreach ($records as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->borrowingDate }}</td>
                            <td>{{ $loan->returnDate }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $records->links() }}
            </div>
        </div>

    </div>
@endsection
