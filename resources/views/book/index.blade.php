@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Books</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('book.index') }}">book</a></li>
                    <li class="breadcrumb-item active">index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{ route('book.create') }}" class="btn btn-primary">Add books</a>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Showing all borrowed books</h5>
                <table class="table table-striped">
                    <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($borrowedBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}" class="btn btn-primary">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $borrowedBooks->links() }}
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <h5 class="card-title">Showing all available books</h5>
                    <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($availableBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}" class="btn btn-primary">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $availableBooks->links() }}
            </div>
        </div>

    </div>
@endsection
