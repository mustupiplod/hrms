<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Reason's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.reason.create')}}" class="btn btn-info">Add Reason</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%">Reason Id</th><th width="10%">Reason Type</th><th width="18%">Content</th><th width="5%">Status</th><th width="10%">Action</th>
        @foreach($reasons as $reason)
            <tr>
                <td>
                    {{$reason->reason_id}}
                </td>
                <td>
                    {{$reason->reason_type}}
                </td>
                <td>
                    {!! $reason->reason_content !!}
                </td>
                <td>
                    @if($reason->is_active == 0)
                        <option value="{{$reason->is_active}}">Active</option>
                    @else
                        <option value="{{$reason->is_active}}">Inactive</option>
                    @endif
                </td>

                <td >
                    <a href="{{route('admin.reason.edit',['id'=> $reason->id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.reason.delete',['id'=> $reason->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

