@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1>Home</h1>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('supervisor.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">Supervisors</h5>
                            <div class="text-center">
                                <i class="bi bi-person-badge-fill h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a href="{{ route('volunteer.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">Volunteers</h5>
                            <div class="text-center">
                                <i class="bi bi-person-badge h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('member.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">Members</h5>
                            <div class="text-center">
                                <i class="bi bi-person h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a href="{{ route('book.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">Books</h5>
                            <div class="text-center">
                                <i class="bi bi-book h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('loan.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">Loans</h5>
                            <div class="text-center">
                                <i class="bi bi-journal-text h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a href="">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title text-center h1 text-white">GitHub</h5>
                            <div class="text-center">
                                <i class="bi bi-journal-text h1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
