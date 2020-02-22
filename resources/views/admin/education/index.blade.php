<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
          rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
    <br>
    <div class="col-lg-8 ">
        <h1>Education</h1>
        <div class="row">
            <div class="col-md-6 ">
                <a href="{{route('admin.education.create')}}" class="btn btn-info">Add Education</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>

    </div>
    <div class="col-md-9 mt-4">
        <table class="table  table-bordered ">
            <th width="15%">School/University Name</th> <th width="15%">Degree</th> <th width="10%">Field</th> <th width="10%">Year Completed</th><th width="10%">Status</th> <th width="25%">Action</th>
            @foreach($educations as $education)
                <tr>
                    <td>
                        {{$education->school_name}}
                    </td>
                    <td>
                        {{$education->degree}}
                    </td>
                    <td>
                        {{$education->field}}
                    </td>
                    <td>
                        {{$education->year_complete}}
                    </td>
                    <td>
                        @if($education->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{route('admin.education.edit',['id'=> $education->id]) }}" class="btn btn-success pull-right ">Edit</a>
                        <a href="{{route('admin.education.delete',['id'=> $education->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

