<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Status</h1>
    <div class="row">
        <div class="col-md-4 ">
            <a href="{{route('admin.status.create')}}" class="btn btn-info">Add Status</a>
        </div>
        <div class="col-md-3 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-4 mt-4">
    <table class="table  table-bordered ">
        <th width="10%">Name</th> <th width="10%">Action</th>
        @foreach($statuss as $status)
            <tr>
                <td>
                    {{$status->name}}
                </td>

                <td >
                    <a href="{{route('admin.status.edit',['id'=> $status->id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.status.delete',['id'=> $status->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

