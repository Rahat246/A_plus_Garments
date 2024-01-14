@extends('Backend.adminmaster')
@section('contents')
<div class="row">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('product.create')}}">Upload Buyer Image</a>
            </div>
            <div class="col-md-6">
                <form action="{{route('product.list')}}" method="get">
                    <div class="row">
                </form>
        </div>
        </div>
        </br>
        <table class="table table-hover ">
    <thead>
        <tr>
        <th scope="col" style="text-align: center;">id</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
    @foreach ($Products as $key=>$product_image)
        <tr>
        <th class="center" scope="row"  style="width: 10%; text-align: center;">{{$key+1}}</th>
        <td><img src="data:image/jpeg;base64,{{ base64_encode($product_image->product_image) }}" alt="Image" height="50" weight="50"></td>
        <td style="width: 25%"><a class="btn btn-sm btn-primary" href="{{route('product.delete',$product_image->id)}}"><i class="bi bi-trash"></i></a>
        <a class="btn btn-sm btn-primary" href="{{route('product.edit',$product_image->id)}}"><i class="bi bi-pencil-square"></i></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
        
            
@endsection

</div>