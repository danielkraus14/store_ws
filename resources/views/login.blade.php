@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user">User</label>
                            <input id="user" class="form-control" type="text" name="user">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="number" name="password">
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection