@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <p class="mb-0">All Customers List</p>
                    <a href="{{ route('customers.create') }}" class="btn btn-primary">Create Customer</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $c)
                            <tr>
                                <td> {{ $c->id }} </td>
                                <td> {{ $c->name }} </td>
                                <td> {{ $c->email }} </td>
                                <td> {{ $c->phone }} </td>
                                <td>
                                    <form action="{{ route('customers.destroy', $c->id) }}" method="post">
                                        <a href="{{ route('customers.edit', $c->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('customers.show', $c->id) }}" class="btn btn-success btn-sm">Show</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
