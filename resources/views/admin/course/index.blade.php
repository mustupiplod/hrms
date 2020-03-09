<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<div class="col-lg-8 ">
    <h1>Course's</h1>
    <div class="row">
        <div class="col-md-6 ">
            <a href="{{route('admin.course.create')}}" class="btn btn-info">Add Course</a>
        </div>
        <div class="col-md-6 ">
            <a href="/" class="btn btn-info" style="float:right;">Exit</a>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-4">
            <table class="table  table-bordered ">
                <th width="8%">Image</th><th width="8%">Name</th><th width="10%">Questionnaire</th><th width="13%">Trainer</th><th width="12%">Start-Date</th><th width="12%">End-Date</th><th width="8%">Assign</th><th width="8%">Status</th> <th width="8%">Action</th>
                @foreach($courses as $course)
                    <tr>
                        <td>
                            <img src="{{ asset('course/'.$course->course_name.'/'.$course->image) }}" height="100px" width="100px"/>
                        </td>
                        <td>
                            {{$course->course_name}}
                        </td>
                        <td>
                            {{$course->question_name}}
                        </td>
                        <td>
                            {{$course->f_name}} {{$course->l_name}}
                        </td>
                        <td>
                            {{$course->start_date}}
                        </td>
                        <td>
                            {{$course->end_date}}
                        </td>
                        <td>
                            {{$course->assign_to}}
                        </td>

                        <td>
                            @if($course->is_active == 0)
                                <span>Active</span>
                            @else
                                <span> Inactive</span>
                            @endif
                        </td>
                        <td >
                            <a href="{{route('admin.course.edit',['id'=> $course->id]) }}" class="btn btn-success pull-right ">Edit</a>
                            <a href="{{route('admin.course.delete',['id'=> $course->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>


