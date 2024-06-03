@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Add loans</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('loan.index') }}">loan</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('loan.store') }}"class="mt-3 needs-validation" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <label for="book_id" class="col-sm-3 col-form-label">Book ID</label>
                            <div class="col-sm-9">
                                <input type="text" id="book_id" name="book_id" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid book id
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="member_id" class="col-sm-3 col-form-label">Member ID</label>
                            <div class="col-sm-9">
                                <input type="text" id="member_id" name="member_id" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid member id
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="borrowingDate" class="col-sm-3 col-form-label">Borrowing Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="borrowingDate" name="borrowingDate" class="form-control" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid date
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
