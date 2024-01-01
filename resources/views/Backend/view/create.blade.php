@extends('Backend.adminmaster')
@section('contents') 
<form action="{{route('create.store')}}"method="POST" enctype="multipart/form-data">
@csrf

        <div class="form-group">
            <label for="">Gallery Image</label>
            <input type="file" name="image" class="form-control" placeholder="Image" accept="image/*" required>
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection