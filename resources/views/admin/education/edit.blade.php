<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<div class="col-lg-8 ">
    <h1> Edit Education</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.education.update',$education->id)}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px; ">
            <label>School/University Name:</label>
            <input type="text" class="form-control" name="name" value="{{$education->school_name}}">
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Degree:</label>
            <select name="degree" class="form-control">
                <option value="{{$education->degree}}">{{$education->degree}}</option>
                @foreach($degrees as $degree)
                    <option value="{{$degree->name}}">{{$degree->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Field:</label>
            <select name="field" class="form-control">
                <option value="{{$education->field}}">{{$education->field}}</option>
                @foreach($degrees as $degree)
                    <option value="{{$degree->related}}">{{$degree->related}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Year Completed:</label>
            <input type="text" class="form-control" name="year_complete" id="cyear" value="{{$education->year_complete}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: </label>
            <select name="is_active" id="" class="form-control">
                @if($education->is_active == 0)
                    <option value="{{$education->is_active}}">Active</option>
                @else
                    <option value="{{$education->is_active}}">Inactive</option>
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
    $(function() {
        $( "#cyear" ).datepicker();
    });
</script>
