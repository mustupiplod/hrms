<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="col-lg-8 offset-2">
    <center><h1> Edit City </h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.city.update',['id'=>$cities->city_id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">City Name: <b style="color: red;">*</b> </label>
            <input type="text" name="city_name" class="form-control" value="{{$cities->city_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">State Name: <b style="color: red;">*</b> </label>
            <select name="state_id" class="form-control">
                <option value="{{$cities->country_id}}">{{$cities->state_name}}</option>
                @foreach($states as $state)
                    <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Country Name: <b style="color: red;">*</b> </label>
            <select name="country_id" class="form-control">
                <option value="{{$cities->country_id}}">{{$cities->country_name}}</option>
                @foreach($countries as $country)
                    <option value="{{$country->country_id}}">{{$country->country_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: <b style="color: red;">*</b></label>
            <select name="is_active" id="" class="form-control">
                @if($cities->is_active == "0")
                    <option value="{{$cities->is_active}}" selected>Active</option>
                    <option value="1">Inactive</option>
                @else
                    <option value="{{$cities->is_active}}" selected>Inactive</option>
                    <option value="0">Active</option>
                @endif


            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
</div>
