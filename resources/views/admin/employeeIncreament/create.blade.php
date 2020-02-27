<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class="col-lg-8 ">
    <h1> Add Increament</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.empincreament.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employee Name: <b style="color: red;">*</b> </label>
{{--            <input type="text" class="form-control" name="employee_name">--}}
            <select name="employee_name" class="form-control">
                <option value="0">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Designation: <b style="color: red;">*</b> </label>
            <select name="current_designation" class="form-control">
                <option value="0">Select Designation</option>
                @foreach($designations as $designation)
                <option value="{{$designation->designation_name}}">{{$designation->designation_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Increament Type: <b style="color: red;">*</b> </label>
            <select name="increament_type" class="form-control">
                <option value="0">Select Increament</option>
                @foreach($increaments as $increament)
                    <option value="{{$increament->increament_name}}">{{$increament->increament_name}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group " style="margin-top: 25px; ">
            <label>Increament Date:</label>
            <input type="text" class="form-control" name="increament_date" id="incdate">
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Remark:</label>
            <textarea name="remark"  rows="3" class="form-control"></textarea>
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

<script>
    $( function() {
        $( "#incdate" ).datepicker();
    } );
</script>
