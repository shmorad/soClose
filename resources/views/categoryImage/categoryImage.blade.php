@extends('layouts.app')
@section('content')
<div class="container mt-5">
    
    <div class="card" >
        <div class="card-body text-center">
          <h1 class="card-title">Add New Category</h1>
          <hr>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ $message }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            @endif 
            <form action="{{route('categoryImage.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-3">
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
                <div class="form-outline mb-3 ">
                    <label class="form-label" for="form1Example1">Category Image</label>
                    <input name="image" type="file"class="form-control @error('categoryImage', 'post') is-invalid @enderror" value="{{ old('categoryImage') }}"/>
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary ">Add</button>
              </form>
        </div>
    </div>
</div>

@endsection