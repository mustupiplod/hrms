<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class="col-lg-8 ">
    <h1> Edit Employee-Increament</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.empincreament.update',['id'=>$empincreament->id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employee Name: <b style="color: red;">*</b> </label>
            <input type="text" class="form-control" name="emp_name" value="{{$empincreament->employee_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Designation: <b style="color: red;">*</b> </label>
            <select name="current_designation" class="form-control">
                <option value="{{$empincreament->current_designation}}">{{$empincreament->current_designation}}</option>
                @foreach($designations as $designation)
                    <option value="{{$designation->designation_name}}">{{$designation->designation_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Increament Type: <b style="color: red;">*</b> </label>
            <select name="increament_type" class="form-control">
                <option value="{{$empincreament->increament_type}}">{{$empincreament->increament_type}}</option>
{{--                fetching increament type from increament masters--}}
                @foreach($increaments as $increament)
                    <option value="{{$increament->increament_name}}">{{$increament->increament_name}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group " style="margin-top: 25px; ">
            <label>Increament Date:</label>
            <input type="text" class="form-control" name="increament_date" id="incdate" value="{{$empincreament->increament_date}}">
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Remark:</label>
            <textarea name="remark"  rows="3" class="form-control">{{$empincreament->remark}}</textarea>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: </label>
            <select name="is_active" id="" class="form-control">
                @if($empincreament->is_active == 0)
                    <option value="{{$empincreament->is_active}}">Active</option>
                @else
                    <option value="{{$empincreament->is_active}}">Inactive</option>
                @endif
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
