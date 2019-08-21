@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <p class="mb-0">Edit Customer - {{ $customer->name }}</p>
                    <a href="{{ route('customers.index') }}" class="btn btn-primary">Customers List</a>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-4 offset-4">
                      <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                          <label for="">Customer Name</label>
                          <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                          <label for="">Customer Email</label>
                          <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="">Customer Phone</label>
                          <input type="number" name="phone" value="{{ old('phone', $customer->phone) }}" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group text-center">
                          <button class="btn btn-success" type="submit">Update Customer</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
