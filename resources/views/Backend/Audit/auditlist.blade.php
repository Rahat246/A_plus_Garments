@extends('Backend.adminmaster')
@section('contents')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{route('audit.create')}}">Upload Certificate Image</a>
        </div>
        <div class="col-md-6">
        <form action="{{route('audit.list')}}" method="get">
        <div class="row">
        </form>
    </div>
</div>
        </br>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col" style="text-align: center;">id</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
            @foreach ($audits as $key=>$image)
                <tr>
                <th scope="row" style="width: 10%; text-align: center;">{{$key+1}}</th>
                <td><img src="data:image/jpeg;base64,{{ base64_encode($image->image) }}" alt="Image" height="50" weight="50"></td>
                <td style="width: 25%">
                    <a class="btn btn-sm btn-primary" href="{{route('audit.delete',$image->id)}}"><i class="bi bi-trash"></i></a>
                    <a class="btn btn-sm btn-primary" href="{{route('audit.edit',$image->id)}}"><i class="bi bi-pencil-square"></i></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
                

        </div>

@endsection