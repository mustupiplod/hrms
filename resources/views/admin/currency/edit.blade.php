<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <div class="col-lg-8 ">
        <h1> Edit Currency</h1>
    </div>
    <div class="col-md-5 col-md-offset-3 ">
        <form action="{{route('admin.currency.update',$currency->id)}}" method="post">
            @csrf
            <div class="form-group " style="margin-top: 25px; ">
                <label>Currency Name:</label>
                <input type="text" class="form-control" name="currency_name" value="{{$currency->currency_name}}">
            </div>
            <div class="form-group " style="margin-top: 25px; ">
                <label>Code:</label>
                <input type="text" name="code" class="form-control" value="{{$currency->code}}">
            </div>
            <div class="form-group " style="margin-top: 25px; ">
                <label>Value:</label>
                <input type="text" name="value" class="form-control" value="{{$currency->value}}">
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Status: </label>
                <select name="is_active" id="" class="form-control">
                    @if($currency->is_active == 0)
                        <option value="{{$currency->is_active}}">Active</option>
                    @else
                        <option value="{{$currency->is_active}}">Inactive</option>
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

