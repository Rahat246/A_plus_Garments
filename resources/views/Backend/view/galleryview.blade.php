@extends('Backend.adminmaster')
@section('contents')
<div class="container">
    <h2>Gallery</h2>

    @foreach ($galleries as $image)
    <div class="col-md-4">
   
    <img src="data:image/jpeg;base64,{{ base64_encode($image->image) }}" alt="Image" height="50" width="50">

    </div>
@endforeach
</div>

@endsection