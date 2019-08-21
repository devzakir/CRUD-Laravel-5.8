@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <p class="mb-0">Customer Profile - {{ $customer->name }}</p>
                    <a href="{{ route('customers.index') }}" class="btn btn-primary">Customers List</a>
                </div>
                <div class="card-body">                  
                    <div class="row">
                        <div class="col-4 offset-4">
                            <p for="">Name: {{ $customer->name }}</p>
                            <p for="">Email: {{ $customer->email }}</p>
                            <p for="">Phone: {{ $customer->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
