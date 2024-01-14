@extends('Backend.adminmaster')
@section('contents')
    <table class="table table-hover ">
    <thead>
        <tr>
        <th scope="col" style="text-align: center;">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
    @foreach ($contacts as $key=>$Contact)
        <tr>
        <th class="center" scope="row"  style="width: 10%; text-align: center;">{{$key+1}}</th>
        <td>{{$Contact->name}}</td>
        <td>{{$Contact->email}}</td>
        <td>{{$Contact->subject}}</td>
        <td>{{$Contact->message}}</td>
        <td style="width: 25%"><a class="btn btn-sm btn-primary" href=""><i class="bi bi-trash"></i></a>
        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-pencil-square"></i></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
        
            
@endsection

</div>