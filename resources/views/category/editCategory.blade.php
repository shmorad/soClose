@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card" >
        <div class="card-body text-center">
          <h1 class="card-title">Edit Category</h1>
          <hr>
        </div>
        <div class="card-body">
            <form action="{{route('category.update',$category->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-outline mb-3 ">
                    <label class="form-label" for="form1Example1">Edit Category</label>
                    <input name="category" type="text"class="form-control @error('category', 'get') is-invalid @enderror" placeholder="Edit Category" value="{{ $category->category}}"/>
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
                <button type="submit" class="btn btn-primary ">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection