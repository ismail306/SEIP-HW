<x-layouts.master>

<x-slot:title>
    Categories
</x-slot>
<table border="1">
    <tr>
        <th>SL#</th>
        <th>Title</th>
        <th>Action</th>

    </tr>
    <tbody>
        @foreach ($data as $category)
            <tr>
                <td>12</td>
                <td>{{$category->cname}}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach



    </tbody>
</table>





</x-layouts.master>