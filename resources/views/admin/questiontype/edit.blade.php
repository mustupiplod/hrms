<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{--    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>--}}
</head>
<div class="col-lg-8 ">
    <h1> Edit Question Type</h1>
</div>

<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.questiontype.update',['id'=>$questions->id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Name: <b style="color: red;">*</b> </label>
            <input type="text" class="form-control" name="question_type" value="{{$questions->question_type}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: <b style="color: red;">*</b></label>
            <select name="is_active" id="" class="form-control">
                @if($questions->is_active == 0)
                    <option value="{{$questions->is_active}}">Active</option>
                @else
                    <option value="{{$questions->is_active}}">Inactive</option>
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

