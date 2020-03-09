<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Leaves Type</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.leavetype.create')}}" class="btn btn-info">Add Leave Type</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%">Leave Name</th><th width="10%">No Days</th><th width="10%">Status</th> <th width="10%">Action</th>
        @foreach($leaves as $exit)
            <tr>
                <td>
                    {{$exit->leave_name}}
                </td>
                <td>
                    {{$exit->leave_days}}
                </td>
                <td>
                    @if($exit->is_active == 0)
                        <span>Active</span>
                    @else
                        <span> Inactive</span>
                    @endif
                </td>
                <td >
                    <a href="{{route('admin.leavetype.edit',['id'=> $exit->leave_id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.leavetype.delete',['id'=> $exit->leave_id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

