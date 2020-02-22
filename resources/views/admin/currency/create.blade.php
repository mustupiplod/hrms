<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <div class="col-lg-8 ">
        <h1> Add Currency</h1>
    </div>
    <div class="col-md-5 col-md-offset-3 ">
        <form action="{{route('admin.currency.store')}}" method="post">
            @csrf
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Name: <b style="color: red;">*</b> </label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Code: <b style="color: red;">*</b> </label>
                <input type="text" class="form-control" name="code">
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Value: <b style="color: red;">*</b> </label>
                <input type="text" class="form-control" name="value">
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
