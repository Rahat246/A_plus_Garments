@extends('Backend.adminmaster')
@section('contents')
<form action="{{route('admin.update',$galleries->id)}}"method="POST" enctype="multipart/form-data" > 
@method('PUT')
@csrf


        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control" placeholder="Image" accept="image/*" required value="{{$galleries->image}}">
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection