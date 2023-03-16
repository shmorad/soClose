@extends('layouts.app')
@section('content')
<div class="container mt-5">
    
    <div class="card" >
        <div class="card-body text-center">
          <h1 class="card-title">Add New Category</h1>
          <hr>
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-outline mb-3 ">
                    <label class="form-label" for="form1Example1">Add Category</label>
                    <input name="category" type="text"class="form-control @error('category', 'post') is-invalid @enderror" placeholder="Add New Category" value="{{ old('category') }}"/>
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