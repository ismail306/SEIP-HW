<x-layouts.master>


    <div>
        <h1>Title : {{ $categorydata->cname }}</h1>
        <p>Is Active ? {{$categorydata->is_active}}</p>
        <p>Image : {{$categorydata->image}}</p>


        <img src="{{asset('storage/categories/'.$categorydata->image)}}" alt="" width="200" height="300">

    </div>


</x-layouts.master>