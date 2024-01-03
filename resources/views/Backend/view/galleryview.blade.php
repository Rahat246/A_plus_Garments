@extends('Backend.adminmaster')
@section('contents')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{route('admin.create')}}">Upload Gallery Image</a>
        </div>
        <div class="col-md-6">
        <form action="{{route('audit.list')}}" method="get">
        <div class="row">
        </form>
    </div>
</div>
        </br>


        <table class="">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
            @foreach ($galleries as $key=>$image)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td><img src="data:image/jpeg;base64,{{ base64_encode($image->image) }}" alt="Image" height="50" weight="50"></td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.delete',$image->id)}}"><i class="bi bi-trash"></i></a>
                  <a class="btn btn-primary" href="{{route('admin.edit',$image->id)}}">Edit</i></a>
              </td>
              </tr>
                @endforeach
            </tbody>
            </table>
                

@endsection