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

<div class="col-lg-8 offset-2">
    <center><h1> Add Leave-Type </h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.leaverequest.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employee Name: <b style="color: red;">*</b> </label>
            <select name="employee_name" class="form-control">
                <option value="0">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Leave Type: <b style="color: red;">*</b> </label>
            <select name="leave_type" class="form-control">
                <option value="0">Select Leave</option>
                @foreach($leavetypes as $employee)
                    <option value="{{$employee->leave_id}}">{{$employee->leave_name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">From Date: <b style="color: red;">*</b></label>
            <input type="text" name="from_date" id="start" class="form-control" autocomplete="off">
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">End Date: <b style="color: red;">*</b></label>
            <input type="text" name="end_date" id="end" class="form-control" autocomplete="off">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Total Days: <b style="color: red;">*</b></label>
            <input type="text" name="total_days" id="totaldays" class="form-control">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Remark: <b style="color: red;">*</b></label>
            <textarea name="remark" class="form-control"  rows="4"></textarea>
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#start").datepicker({
            numberOfMonths: 1,
            minDate:0,
            dateFormat:"dd-mm-yy",
            onSelect: function(selected) {
                $("#end").datepicker("option","minDate", selected)
            }
        });
        $("#end").datepicker({
            numberOfMonths: 1,
            dateFormat:"dd-mm-yy",
            onSelect: function(selected) {
                $("#start").datepicker("option","maxDate", selected);
                myfunc();

            }
        });
    });
    function myfunc(){
        var start= $("#start").datepicker("getDate");
        var end= $("#end").datepicker("getDate");
        days = (end- start) / (1000 * 60 * 60 * 24)+1;
        $("#totaldays").val(Math.round(days));
    }
</script>

