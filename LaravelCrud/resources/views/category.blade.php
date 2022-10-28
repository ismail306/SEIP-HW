<x-layouts.master>

    <x-slot:title>
        Categories
        </x-slot>

        <div class="btn-toolbar-mb-2 mb-md-0">
            <a href="{{ route('category.create') }}" class="btn btn-sm btn-outline-secondary">Add Category</a>

        </div>


        <table border="1">
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Action</th>

            </tr>
            <tbody>
                <?php $sl = 1; ?>
                @foreach ($data as $category)
                <tr>
                    <td>{{$sl++}}</td>
                    <td>{{$category->cname}}</td>
                    <td>
                        <button type="button" class="btn btn-outline-success"><a href="{{route('categories.edit',['id'=>$category->id])}}">Edit</a></button>
                        <button type="button" class="btn btn-outline-warning"><a href="{{route('categories.show',['id'=>$category->id])}}">Show</a></button>


                        <button type="button" class="btn btn-outline-danger"> <a href="{{route('categories.destroy',['id'=>$category->id])}}">Delete</a></button>


                    </td>
                </tr>

                @endforeach



            </tbody>
        </table>





</x-layouts.master>