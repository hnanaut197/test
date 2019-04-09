@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <h2>Users table</h2>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Password</th>
                              <th>Email</th>
                              <th>Add</th>
                              <th>Remove</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->email}}</td>
                            <td><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td>
                            <td><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
