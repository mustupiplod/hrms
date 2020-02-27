<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Exits Details</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.exitdetails.create')}}" class="btn btn-info">Add Exit Detail</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%">Employee Name</th><th width="10%">Separation Date</th><th width="10%">Interviewer</th><th width="8%">Reason</th> <th width="10%">Action</th>
        @foreach($exitdetails as $exit)
            <tr>
                <td>
                    {{$exit->f_name}} {{$exit->l_name}}
                </td>
                <td>
                    {{$exit->separation_date}}
                </td>
                <td>
                    {{$exit->f_name}} {{$exit->l_name}}
                </td>
                <td>
                    {{$exit->reason}}
                </td>
                <td >
                    <a href="{{route('admin.exitdetails.edit',['id'=> $exit->id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.exitdetails.delete',['id'=> $exit->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

