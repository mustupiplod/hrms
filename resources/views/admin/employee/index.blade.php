<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Employee's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.employee.create')}}" class="btn btn-info">Add Employee</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>
</div>
<div class="col-md-7 mt-4">
    <table class="table  table-bordered">
        <th>Name</th><th>Middle-Name</th><th>Last-Name</th><th>E-Mail</th><th>Phone No</th><th>Addres</th><th>Location</th><th>D.O.B</th><th>Gender</th><th>Marital-Status</th><th>Education</th><th>Year Completed</th><th>Parent-Department</th><th>Department</th><th>Department-Lead</th><th>Designation</th><th>Ation</th>
        @foreach($employees as $employee)
            <tr>
                <td>
                    {{$employee->name}}
                </td>
                <td>
                    {{$employee->mname}}
                </td>
                <td>
                    {{$employee->lname}}
                </td>
                <td>
                    {{$employee->email}}
                </td>
                <td>
                    {{$employee->mobile}}
                </td>
                <td>
                    {{$employee->address}}
                </td>
                <td>
                    {{$employee->location}}
                </td>
                <td>
                    {{$employee->gender}}
                </td>
                <td>
                    {{$employee->dob}}
                </td>
                <td>
                    {{$employee->marital_status}}
                </td>
                <td>
                    {{$employee->education}}
                </td>
                <td>
                    {{$employee->year_complete}}
                </td>
                <td>
                    {{$employee->parent_department}}
                </td>
                <td>
                    {{$employee->department}}
                </td>
                <td>
                    {{$employee->department_lead}}
                </td>
                <td>
                    {{$employee->designation}}
                </td>


{{--                <td>--}}
{{--                    @if($employee->is_active == 0)--}}
{{--                        <span>Active</span>--}}
{{--                    @else--}}
{{--                        <span> Inactive</span>--}}
{{--                    @endif--}}
{{--                </td>--}}
                <td >
                    <a href="{{route('admin.employee.show',['id'=>$employee->id])}}" class="btn btn-info">View</a>
                    <a href="{{route('admin.employee.edit',['id'=>$employee->id])}}" class="btn btn-success pull-right ">Edit</a>
{{--                    <a href="{{route('admin.currency.delete',['id'=>$employee->id])}}" class="btn btn-danger pull-right ">Delete</a>--}}

                </td>
            </tr>
        @endforeach
    </table>

</div>
