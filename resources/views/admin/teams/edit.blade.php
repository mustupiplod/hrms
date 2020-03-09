<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>
</head>
<div class="col-lg-8 ">
    <h1> Edit Team's</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.team.update',[$team->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Team Name<b style="color: red;">*</b></label>
            <input type="text" name="team_name" class="form-control" value="{{$team->team_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employees<b style="color: red;">*</b> </label>
            <select class="form-control" name="employees_id[]" multiple="multiple">
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
