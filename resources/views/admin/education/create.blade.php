<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<div class="col-lg-8 ">
    <h1> Add Education</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.education.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">School/University Name: <b style="color: red;">*</b> </label>
            <input type="text" class="form-control" name="school_name">
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Degree:</label>
            <select name="degree" class="form-control">
                <option value="">Select Degree</option>
                @foreach($degrees as $degree)
                    <option value="{{$degree->name}}">{{$degree->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Field:</label>
            <select name="field" class="form-control">
                <option value="0">Select Field</option>
                @foreach($degrees as $degree)
                    <option value="{{$degree->related}}">{{$degree->related}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Year Completed:</label>
            <input type="text" class="form-control" id="cyear" name="year_complete" value="">
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
        $( "#cyear" ).datepicker();
    } );
</script>
