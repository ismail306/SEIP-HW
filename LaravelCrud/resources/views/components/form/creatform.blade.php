<form action="{{route('categories.store')}}" method="post">
    @csrf

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="nameInput">Title</label>
        <input name="cname" value="{{old('cname')}}" type="text" id="nameInput" class="form-control" />

        @error('cname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input " type="checkbox" name="is_active" id="isActiveInput">
        <label class="form-check-label" for="isActiveInput"> Is active ? </label>
    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>