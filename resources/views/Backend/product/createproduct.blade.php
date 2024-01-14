@extends('Backend.adminmaster')
@section('contents')
<form action="{{route('product.submit')}}"method="POST" enctype="multipart/form-data"> 

@csrf

        <div class="form-group">
            <label for="">Buyer Image</label>
            <input type="file" name="product_image" class="form-control" placeholder="Image" accept="image/*" required>
        </div>
        </br>
        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection