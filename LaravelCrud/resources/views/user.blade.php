<x-layouts.master>
<x-slot:title>
    User List
</x-slot>

    <div>
            <table class="table table-striped tstyle">
                <thead >
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Ismail</td>
                        <td>123</td>
                        <td>1000</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Shakil</td>
                        <td>124</td>
                        <td>2000</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Emon</td>
                        <td>150</td>
                        <td>3000</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

    </div>



</x-layouts.master>