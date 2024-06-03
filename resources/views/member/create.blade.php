@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Add members</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('member.index') }}">member</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('member.store') }}" class="mt-3 needs-validation" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid email
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="icNum" class="col-sm-3 col-form-label">IC No.</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="icNum" name="icNum" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid ic number
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid phone number
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="address" name="address" required></textarea>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid address
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback" role="alert">
                                    Please enter valid email
                                </div>
                            </div>
                        </div>

                        <div class="row px-2">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
