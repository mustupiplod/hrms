<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Team's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.team.create')}}" class="btn btn-info">Add Team</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>




<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th>Name</th>
        <th>Employees</th>
        <th>Action</th>
        <tbody>
{{--        @foreach($teams->groupBy('name') as $key => $team )--}}
        @foreach($Team_data as $key )
            <tr>
            <td>
                {{$key->id}}
                {{$key->name}}
                {{$key->team_master_id}}
            </td>
                <td>
{{--                {{$key->f_name}}--}}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
