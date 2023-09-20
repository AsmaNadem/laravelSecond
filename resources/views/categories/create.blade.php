@extends('layout')
@section('content')

    <h1>Create Category</h1>

    <form class="mx-5" method="post" action="{{route('categories.store')}}">
        @csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name">

</div>
        <div class="form-group">
            <label for="Description">Description:</label>
            <textarea class="form-control form-check">
            </textarea>
        </div>


        <div class="custom-control custom-radio">
            <input type="radio" class=" mr-5" id="customRadio" checked name="type" value="New">
            <label  class=" mr-5" for="customRadio">New
            </label>



            <input type="radio" class=" mx-5" id="customRadio2" name="type" value="old">
            <label  class="" for="customRadio">Old
            </label>
        </div>

        <div class="form-group form-check">
            <label class="form-check-lable">

            <input name="status" class="form-check-input" type="checkbox">Status
            </label>
        </div>

        <button class="btn btn-primary">Submit</button>


    </form>

@endsection
