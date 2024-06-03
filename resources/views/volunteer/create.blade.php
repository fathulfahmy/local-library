@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Add volunteers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('volunteer.index') }}">volunteer</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form method="POST" action="{{ route('volunteer.store') }}" class="mt-3 needs-validation" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid name
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid email
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid password
                                </div>
                            </div>
                        </div>
                        <div class="row px-2">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>

    </div>
@endsection
