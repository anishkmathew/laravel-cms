@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex flex-row-reverse mb-2">
            <a href=" {{ route('categories.create')}} " class="btn btn-success">Add Category</a>
        </div>
        <div class="card card-default">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td> {{ $category->name }} </td>
                            <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
