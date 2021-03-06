<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
@foreach($employees as $employee)
<div class="col-lg-8 ">
    <h1> Viewing {{$employee->f_name}}'s Profile</h1>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">

            <div class="col-md-5 ">
                @csrf

                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Name: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="name" value="{{$employee->f_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Middle Name: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="mname" value="{{$employee->m_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Last Name: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="lname" value="{{$employee->l_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">E-Mail: <b style="color: red;">*</b> </label>
                    <input type="email" class="form-control" name="email" value="{{$employee->email_id}}" >
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Phone No: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="mobile" value="{{$employee->mobile}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">D.O.B: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="dob" id="dob" autocomplete="none" value="{{$employee->dob}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Gender: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="gender" value="{{$employee->gender}}">

                </div>
                <div class="form-group">
                    <label>Address: <b style="color: red;">*</b></label>
                    <textarea name="address"  cols="30" rows="3" class="form-control"> {{$employee->address}} </textarea>
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Location: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="location" value="{{$employee->location}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Marital Status: <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="marital_status" value="{{$employee->marital_name}}">
                </div>

                {{--        <div class="form-group " style="margin-top: 25px;">--}}
                {{--            <label for="">Status: <b style="color: red;">*</b></label>--}}
                {{--            <select name="is_active" id="" class="form-control">--}}
                {{--                <option value="0">Active</option>--}}
                {{--                <option value="1">Inactive</option>--}}
                {{--            </select>--}}
                {{--        </div>--}}

            </div>
            <div class="col-md-5">
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Education: <b style="color: red;">*</b> </label>
                    <input type="text" name="education" class="form-control" value="{{$employee->school_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Degree: <b style="color: red;">*</b> </label>
                    <input type="text" name="degree" class="form-control" value="{{$employee->degree_name}}">
                </div>
                <div class="form-group">
                    <label for="">Year Complete <b style="color: red;">*</b> </label>
                    <input type="text" class="form-control" name="year_complete" id="ydate" autocomplete="none" value="{{$employee->year_complete}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Parent-Department: <b style="color: red;">*</b> </label>
                    <input type="text" name="parent_department" class="form-control" value="{{$employee->parent_depart_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Department: <b style="color: red;">*</b> </label>
                    <input type="text" name="department" class="form-control" value="{{$employee->department_name}}">
                </div>
                <div class="form-group " style="margin-top: 25px;">
                    <label for="">Designation: <b style="color: red;">*</b> </label>
                    <input type="text" name="designation" class="form-control" value="{{$employee->designation_name}}">
                </div>

            </div>
        </div>

        <div class="form-group">
{{--            <input type="submit" class="btn btn-primary " value="Save">--}}
        </div>
    </form>
</div>
@endforeach

<script>
    $( function() {
        $( "#dob,#ydate" ).datepicker();
    } );
</script>
