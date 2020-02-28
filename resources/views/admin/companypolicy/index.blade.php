<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Company Policies</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.policy.create')}}" class="btn btn-info">Add Policy</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
        <th width="15%">Policy Title</th><th width="10%">Description</th><th width="10%">Employees</th><th width="18%">Action</th>
        @foreach($policies as $policy)
            <tr>
                <td>
                    {{$policy->policy_title}}
                </td>
                <td>
                    {!! $policy->description !!}
                </td>
                <td>
                    {{$policy->f_name}} {{$policy->l_name}}
                </td>

                <td >
                    <a href="{{route('admin.policy.edit',['id'=> $policy->id]) }}" class="btn btn-success pull-right ">Edit</a>
                    <a href="{{route('admin.policy.delete',['id'=> $policy->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>

