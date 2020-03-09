<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>

<div class="col-lg-8 offset-2">
    <center><h1> Edit Reason </h1></center>
</div>
<div class="col-md-5 offset-2 ">

        <form action="{{route('admin.reason.update',['id'=>$reasons->id])}}" method="post">
            @csrf
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Reason Type: <b style="color: red;">*</b> </label>
                <input type="text" name="reason_type" class="form-control" placeholder="Title" value="{{$reasons->reason_type}}">
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Content: <b style="color: red;">*</b></label>
                <textarea name="reason_content" class="form-control" rows="4">{{$reasons->reason_content}}</textarea>
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Status: <b style="color: red;">*</b></label>
                <select name="is_active" id="" class="form-control">
                    @if($reasons->is_active == 0)
                        <option value="{{$reasons->is_active}}">Active</option>
                    @else
                        <option value="{{$reasons->is_active}}">Inactive</option>
                    @endif
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                </select>
            </div>
{{--            <input type="hidden" name="reason_id" value="{{$res_id}}">--}}
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>

</div>

<script>
    CKEDITOR.replace('reason_content');
</script>

