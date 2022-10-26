<h1>Create Categories</h1>
<form action="{{route('categories.store')}}" method="post">
    @csrf

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="nameInput">Title</label>
        <input name="cname" type="text" id="nameInput" class="form-control" />

    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input " type="checkbox" name="is_active" id="isActiveInput">
        <label class="form-check-label" for="isActiveInput"> Is active ? </label>
    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>