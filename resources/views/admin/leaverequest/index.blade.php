<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Leaves Request</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.leaverequest.create')}}" class="btn btn-info">Add Leave Request</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%">Employee Name</th><th width="15%">Leave Type</th><th width="10%">From</th><th width="10%">End</th><th width="10%">No Days</th><th width="10%">Remark</th><th width="10%">Status</th> <th width="10%">Action</th>
        @foreach($leaverequests as $exit)
            <tr>
                <td>
                    {{$exit->f_name}}
                </td>
                <td>
                    {{$exit->leave_name}}
                </td>
                <td>
                    {{$exit->from_date}}
                </td>
                <td>
                    {{$exit->end_date}}
                </td>
                <td>
                    {{$exit->total_days}}
                </td>
                <td>
                    {{$exit->remark}}
                </td>
                <td>
                    @if($exit->is_active == 0)
                        <span>Active</span>
                    @else
                        <span> Inactive</span>
                    @endif
                </td>
                <td >
                    <a href="{{route('admin.leaverequest.edit',['id'=> $exit->request_id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.leaverequest.delete',['id'=> $exit->request_id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

