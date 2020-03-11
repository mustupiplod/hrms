<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>States</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.state.create')}}" class="btn btn-info">Add State</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>
</div>
<div class="col-md-7 mt-4">
    <table class="table  table-bordered">
        <th>State Name</th> <th>Country Name</th>  <th>Status</th><th width="35%">Action</th>
        @foreach($states as $state)
            <tr>
                <td>
                    {{$state->state_name}}
                </td>
                <td>
                    {{$state->country_name}}
                </td>
                <td>
                    @if($state->is_active == 0)
                        <span>Active</span>
                    @else
                        <span> Inactive</span>
                    @endif
                </td>
                <td >
                    <a href="{{route('admin.state.edit',['id'=>$state->state_id])}}" class="btn btn-success pull-right ">Edit</a>
{{--                    <a href="{{route('admin.country.delete',['id'=>$country->country_id])}}" class="btn btn-danger pull-right ">Delete</a>--}}
                </td>
            </tr>
        @endforeach
    </table>

</div>
