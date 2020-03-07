
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Questionnaire's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.questionnaire.create')}}" class="btn btn-info">Add Questionnaire</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="col-md-9 mt-4">
    <table class="table  table-bordered ">
                <th width="15%">Type</th><th width="10%">Name</th><th width="10%">Department</th><th width="8%">Status</th> <th width="18%">Action</th>
                @foreach($questions as $scale)
                    <tr>
                        <td>
                            {{$scale->question_type}}
                        </td>
                        <td>
                            {{$scale->question_name}}
                        </td>
                        <td>
                            {{$scale->department_name}}
                        </td>
{{--                        <td>--}}
{{--                            {{$scale->answer_master_id}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{$scale->valid_answer}}--}}
{{--                        </td>--}}
                        <td>
                            @if($scale->is_active == 0)
                                <span>Active</span>
                            @else
                                <span> Inactive</span>
                            @endif
                        </td>
                        <td >
                            <a href="{{route('admin.questionnaire.edit',['id'=> $scale->id]) }}" class="btn btn-success pull-right ">Edit</a>
                            <a href="{{route('admin.questionnaire.delete',['id'=> $scale->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                        </td>
                    </tr>
                @endforeach
    </table>

</div>

