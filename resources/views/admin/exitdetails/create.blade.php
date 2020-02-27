<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class="col-lg-8 offset-2">
    <center><h1> Exit Details</h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.exitdetails.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employee Name: <b style="color: red;">*</b> </label>
            <select class="form-control" name="employee_name">
                <option value="0">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Separation Date: <b style="color: red;">*</b> </label>
            <input type="text" name="separation_date" id="incdate" class="form-control" placeholder="Date">
        </div>

        <div class="form-group " style="margin-top: 25px; ">
            <label>Interviewer:</label>
            <select class="form-control" name="interviewer">
                <option value="0">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Reason: <b style="color: red;">*</b></label>
            <textarea name="reason" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>

</div>

<script>
    $(function () {
        $("#incdate").datepicker();
    });
</script>
