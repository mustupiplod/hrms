<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>
</head>

<div class="container">
    <div class="row">
        <div class="col-lg-8 ">
            <h1> Add Course</h1>
        </div>
        <div class="col-md-5 col-md-offset-3 ">
            <form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Course Image <b style="color: red;">*</b></label>
                    <input type="file" name="course_image" onchange="readURL(this);" class="form-control-file">
                    <img id="blah" src="" class="" width="200" height="150"/>
                </div>

                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Course Title <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="course_name">
                </div>

                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Select Questionnaire <b style="color: red;">*</b> </label>
                    <select name="questionnaire" class="form-control">
                        <option value="0">Select Questionnaire</option>
                                                @foreach($questions as $question)
                                                    <option value="{{$question->id}}">{{$question->question_name}}</option>
                                                @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Passing Criteria <b style="color: red;">*</b> </label>
                    <input type="text" name="pass_criteria" onkeypress="return Validate(event);" class="form-control">
                </div>

                <div class="form-group " style="margin-top: 25px; ">
                    <label>Trainer <b style="color: red;">*</b></label>
                    <select name="trainer" class="form-control">
                        <option value="0">Select Employee</option>
                        @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Start Date <b style="color: red;">*</b></label>
                            <input type="text" id="start_date" name="start_date" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>End Date <b style="color: red;">*</b></label>
                            <input type="text" id="end_date" name="end_date" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Assign Course <b style="color: red;">*</b> </label>
                    <select name="assign_to" class="form-control">
                        <option value="0">Select</option>
                        <option value="Team">Team</option>
                        <option value="Department">Department</option>
                        <option value="All">All</option>
                    </select>
                </div>
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Status: <b style="color: red;">*</b></label>
                            <select name="is_active" id="" class="form-control">
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                        </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>

        </div>
    </div>
</div>


<script>
    // $( function() {
    //     $( "#incdate" ).datepicker();
    // } );

    $(document).ready(function () {
        $("#start_date").datepicker({
            numberOfMonths: 1,
            minDate: 0,
            dateFormat: "dd-mm-yy",
            onSelect: function (selected) {
                $("#end_date").datepicker("option", "minDate", selected)
            }
        });
        $("#end_date").datepicker({
            numberOfMonths: 1,
            dateFormat: "dd-mm-yy",
            onSelect: function (selected) {
                $("#start_date").datepicker("option", "maxDate", selected)
            }
        });
    });

    //script for validation number and % only
    function Validate(event) {
        var regex = new RegExp("^[0-9%]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }

    function readURL(input, id) {
        id = id || '#blah';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
