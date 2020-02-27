<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<div class="col-lg-8 ">
    <h1> Edit Employee</h1>
</div>
    <div class="container">
        @foreach($employees as $employee)
        <form action="{{route('admin.employee.update',$employee->id)}}" method="post">
            <div class="row">
                <div class="col-md-5 ">
                    @csrf
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Name: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="f_name" value="{{$employee->f_name}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Middle Name: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="m_name" value="{{$employee->m_name}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Last Name: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="l_name" value="{{$employee->l_name}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">E-Mail: <b style="color: red;">*</b> </label>
                        <input type="email" class="form-control" name="email_id" value="{{$employee->email_id}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Phone No: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="mobile" value="{{$employee->mobile}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">D.O.B: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="dob" id="dob" autocomplete="none"
                               value="{{$employee->dob}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Gender: <b style="color: red;">*</b> </label>
                        <select name="gender" id="" class="form-control">
                            <option value="{{$employee->gender}}">{{$employee->gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Address: <b style="color: red;">*</b></label>
                        <textarea name="address" cols="30" rows="3"
                                  class="form-control"> {{$employee->address}}</textarea>
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Location: <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="location" value="{{$employee->location}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Marital Status: <b style="color: red;">*</b> </label>
                        <select name="marital_status" class="form-control">
                            <option value="{{$employee->marital_status}}">{{$employee->marital_name}}</option>
                            @foreach($maritals as $marital)
                                <option value="{{$marital->id}}">{{$marital->marital_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Education: <b style="color: red;">*</b> </label>
                        <select name="education" class="form-control">
                            <option value="{{$employee->education}}">{{$employee->school_name}}</option>
                            @foreach($educations as $education)
                                <option value="{{$education->id}}">{{$education->school_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Education: <b style="color: red;">*</b> </label>
                        <select name="education" class="form-control">
                            <option value="{{$employee->degree}}">{{$employee->degree_name}}</option>
                            @foreach($degrees as $degree)
                                <option value="{{$degree->id}}">{{$degree->degree_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Year Complete <b style="color: red;">*</b> </label>
                        <input type="text" class="form-control" name="year_complete" id="ydate" autocomplete="none"
                               value="{{$employee->year_complete}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Parent-Department: <b style="color: red;">*</b> </label>
                        <select name="parent_department" class="form-control">
                            <option value="{{$employee->parent_department}}">{{$employee->parent_depart_name}}</option>
                            @foreach($parent_departments as $department)
                                <option value="{{$department->id}}">{{$department->parent_depart_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Department: <b style="color: red;">*</b> </label>
                        <select name="department" class="form-control">
                            <option value="{{$employee->department}}">{{$employee->department_name}}</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Department Lead: <b style="color: red;">*</b> </label>
                        {{--                    <select name="department" class="form-control">--}}
                        {{--                        <option value="{{$employee->department_lead}}">{{$employee->department_lead}}</option>--}}
                        {{--                        @foreach($departments as $department)--}}
                        {{--                            <option value="{{$department->name}}">{{$department->name}}</option>--}}
                        {{--                        @endforeach--}}
                        {{--                    </select>--}}
                        <input type="text" name="department_lead" class="form-control"
                               value="{{$employee->department_lead}}">
                    </div>
                    <div class="form-group " style="margin-top: 25px;">
                        <label for="">Designation: <b style="color: red;">*</b> </label>
                        <select name="designation" class="form-control">
                            <option value="{{$employee->designation}}">{{$employee->designation_name}}</option>
                            @foreach($designations as $designation)
                                <option value="{{$designation->id}}">{{$designation->designation_name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary " value="Update">
            </div>
        </form>
            @endforeach
    </div>

    <script>
        $(function () {
            $("#dob,#ydate").datepicker();
        });
    </script>
