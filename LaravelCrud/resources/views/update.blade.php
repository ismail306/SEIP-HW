<h1>Update Categories</h1>
<form action="{{route('categories.update',$categorydata->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="nameInput">Title</label>
        <input name="cname" value="{{$categorydata->cname}}" type="text" id="nameInput" class="form-control" />

    </div>
    <div>
        <input type="file" name="image" value="{{$categorydata->image}}" for="fileToUpload" id="fileToUpload">
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input " type="checkbox" name="is_active" id="isActiveInput" @if($categorydata->is_active) checked> @endif
        <label class="form-check-label" for="isActiveInput"> Is active ? </label>
    </div>



    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>