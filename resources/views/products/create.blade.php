@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create New
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id="description" class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" type="number" name="price">
                            </div>
                            <button class="btn btn-primary" type="submit">Create</button>
                            <a href="{{route('products.index')}}" class="btn btn-danger ml-2">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection