@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-3">You are logged in!</p>
                    <div>
                        <a class="btn btn-primary" href="{{ route('customers.create') }}">Create Customer</a>
                        <a class="btn btn-primary" href="{{ route('customers.index') }}">Customer List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
