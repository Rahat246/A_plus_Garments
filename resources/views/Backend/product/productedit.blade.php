@extends('Backend.adminmaster')
@section('contents')
<form action="{{route('product.update',$Products->id)}}"method="POST" enctype="multipart/form-data" > 
@method('PUT')
@csrf


        <div class="form-group" style="margin-bottom: 20px;">
            <label for="">Buyer Image</label>
            <input type="file" name="product_image" class="form-control" placeholder="Image" accept="image/*" required value="{{$Products->product_image}}">
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection