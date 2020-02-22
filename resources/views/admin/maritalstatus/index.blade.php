<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
    <br>
    <div class="col-lg-8 ">
        <h1>MaritalStatus</h1>
        <div class="row">
            <div class="col-md-6 ">
                <a href="{{route('admin.maritalstatus.create')}}" class="btn btn-info">Add MaritalStatus</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>
    </div>
    <div class="col-md-7 mt-4">
        <table class="table  table-bordered">
            <th>Name</th><th>Status</th><th width="50%">Action</th>
            @foreach($maritals as $marital)
                <tr>
                    <td>
                        {{$marital->name}}
                    </td>
                    <td>
                        @if($marital->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{route('admin.maritalstatus.edit',['id'=>$marital->id])}}" class="btn btn-success pull-right ">Edit</a>
                        <a href="{{route('admin.maritalstatus.delete',['id'=>$marital->id])}}" class="btn btn-danger pull-right ">Delete</a>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
