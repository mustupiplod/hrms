<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="col-lg-8 ">
    <h1> Edit Scale</h1>
</div>
<div class="col-md-5 col-md-offset-3 ">
    <form action="{{route('admin.scale.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Scale Name: <b style="color: red;">*</b> </label>
            <input type="text" class="form-control" name="scale_name" value="{{$scale->scale_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Compensation: <b style="color: red;">*</b> </label>
            <div class="row">
                <div class="col-md-6">

                    <select name="currency" class="form-control">
                        <option value="{{$scale->currency}}">{{$scale->currency}}</option>
                        @foreach($currencys as $cunrrency)
                            <option value="{{$cunrrency->code}}">{{$cunrrency->code}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="number" name="compensation_value" class="form-control" placeholder="Compansation Amount" value="{{$scale->compensation_value}}">
                </div>
            </div>

        </div>

        <div class="form-group " style="margin-top: 25px; ">
            <label>Employee:</label>
            <input type="text" class="form-control" name="employee_name" value="{{$scale->employee_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: </label>
            <select name="is_active" id="" class="form-control">
                @if($scale->is_active == 0)
                    <option value="{{$scale->is_active}}">Active</option>
                @else
                    <option value="{{$scale->is_active}}">Inactive</option>
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


