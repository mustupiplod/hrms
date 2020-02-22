<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Increament's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.increament.create')}}" class="btn btn-info">Add Increament</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%"> Name</th><th width="10%">code</th> <th width="10%">Remark </th><th width="10%">Status</th> <th width="25%">Action</th>
        @foreach($increaments as $increament)
            <tr>
                <td>
                    {{$increament->name}}
                </td>
                <td>
                    {{$increament->code}}
                </td>
                <td>
                    {{$increament->remark}}
                </td>
                <td>
                    @if($increament->is_active == 0)
                        <span>Active</span>
                    @else
                        <span> Inactive</span>
                    @endif
                </td>
                <td >
                    <a href="{{route('admin.increament.edit',['id'=> $increament->id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.increament.delete',['id'=> $increament->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

