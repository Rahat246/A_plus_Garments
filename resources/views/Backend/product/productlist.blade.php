@extends('Backend.adminmaster')
@section('contents')
<div class="row">
    <div class="col-md-6">
 <a class="btn btn-primary" href="{{route('product.create')}}">Create Product</a>
    </div>
    <div class="col-md-6">
      <form action="{{route('product.list')}}" method="get">
      <div class="row">
       <div class="col-md-8"> 
      <input class="form-control" type="text" placeholder="Search product" name="search">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
    </form>
</div>
</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Products as $Key=>$Product)
    <tr>
      <th scope="row">{{$Key + 1}}</th>
      <td><img src="data:image/jpeg;base64,{{ base64_encode($Product->Product) }}" alt="Image">
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection