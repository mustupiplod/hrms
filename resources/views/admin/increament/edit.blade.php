<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="col-lg-8 ">
    <h1> Edit Increament</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.increament.update',['id'=>$increament->id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Name: <b style="color: red;">*</b> </label>
            <input type="text" class="form-control" name="increament_name" value="{{$increament->name}}">
        </div>

        <div class="form-group " style="margin-top: 25px; ">
            <label>Code:</label>
            <input type="text" class="form-control" name="increament_code" value="{{$increament->increament_code}}">
        </div>
        <div class="form-group " style="margin-top: 25px; ">
            <label>Remark:</label>
            <textarea name="remark"  rows="3" class="form-control" >{{$increament->remark}}</textarea>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: <b style="color: red;">*</b></label>
            <select name="is_active" id="" class="form-control">
                @if($increament->is_active == 0)
                    <option value="{{$increament->is_active}}">Active</option>
                @else
                    <option value="{{$increament->is_active}}">Inactive</option>
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

