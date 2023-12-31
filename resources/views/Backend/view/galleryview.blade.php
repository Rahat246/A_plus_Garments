@extends('Backend.adminmaster')
@section('contents')
<div class="container">
    <h2>Gallery</h2>

    @foreach ($galleries as $image)
    <div class="col-md-4">
    {{ dump($image->image_data) }}
    <img src="galleries:image/jpeg;base64,{{ base64_encode($image->image_data) }}" alt="Image">
    </div>
@endforeach
</div>

@endsection