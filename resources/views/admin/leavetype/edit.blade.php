<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="col-lg-8 offset-2">
    <center><h1> Add Leave-Type </h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.leavetype.update',['leave_id'=>$leave->leave_id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Leave Name: <b style="color: red;">*</b> </label>
            <input type="text" name="leave_name" class="form-control" value="{{$leave->leave_name}}">
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Number Of Days: <b style="color: red;">*</b></label>
            <input type="text" name="leave_days" class="form-control" value="{{$leave->leave_days}}">
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: <b style="color: red;">*</b></label>
            <select name="is_active" id="" class="form-control">
                @if($leave->is_active == 0)
                    <option value="0" selected>Active</option>
                    <option value="1">Inactive</option>
                @else
                    <option value="1" selected>Inactive</option>
                    <option value="0" >Active</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
