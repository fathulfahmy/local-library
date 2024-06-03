@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Add books</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('book.index') }}">book</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('book.store') }}" class="mt-3 needs-validation" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" id="title" name="title" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid title
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="author" class="col-sm-3 col-form-label">Author</label>
                            <div class="col-sm-9">
                                <input type="text" id="author" name="author" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid author
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="publisher" class="col-sm-3 col-form-label">Publisher Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="publisher" name="publisher" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid publisher
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="year" class="col-sm-3 col-form-label">Published Year</label>
                            <div class="col-sm-9">
                                <input type="text" id="year" name="year" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid year
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" id="category" name="category" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid category
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
