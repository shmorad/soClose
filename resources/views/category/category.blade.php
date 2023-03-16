@extends('layouts.app')
@section('content')
<div class="container mt-5">

  @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</div>
@endif 
    
  <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
<table id="DataTable" class="table table-striped table-bordered mt-2 text-center" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Category Name</th>
        <th class="th-sm">Edit</th>
        <th class="th-sm">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td class='th-sm'>{{$category->category}}</td>
            <td class='th-sm'><a class="btn btn-primary btn-sm" href="{{route('category.edit',$category->id)}}"><i class='fas fa-edit'></i></a></td>
            <td class='th-sm'>
            <form action="{{route('category.destroy',$category->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item')">
              @csrf
              @method('delete')
              <button class="btn btn-danger btn-sm" type="submit" role="button" name="submit"><i class='fas fa-trash-alt'></i></button>
          </form>
            </td>
        </tr> 
        @endforeach
        
    </tbody>
  </table>
</div>
@endsection
@section('script')
<script type="text/javascript">
 $(document).ready(function () {
$('#DataTable').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
@endsection