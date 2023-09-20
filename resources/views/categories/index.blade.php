@extends('layout')

@section('content')

<h1>Categories</h1>

<a href="{{route('categories.create')}}" class="btn btn-primary mb-5  float-right">Create</a>

<table class="table caption-top">
    <caption>List of users</caption>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Type</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
        <th scope="row">1</th>
        <td>{{$category->name}}</td>
        <td>{{$category->descripton}}</td>
        <td>{{$category->type}}</td>
        <td>{{$category->status}}</td>
        <td><button class="btn btn-primary">Edit</button></td>
        <td><button class="btn btn-danger">Delete</button></td>

    </tr>
    @endforeach

    </tbody>
</table>

@endsection
