<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="col-lg-8 offset-2">
    <center><h1> Edit State </h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.state.update',['id'=>$states->state_id])}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">State Name: <b style="color: red;">*</b> </label>
            <input type="text" name="state_name" class="form-control" value="{{$states->state_name}}">
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Country Name: <b style="color: red;">*</b> </label>
            <select name="country_id" class="form-control">
                <option value="{{$states->country_id}}">{{$states->country_name}}</option>
                @foreach($countries as $country)
                    <option value="{{$country->country_id}}">{{$country->country_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group " style="margin-top: 25px;">
            <label for="">Status: <b style="color: red;">*</b></label>
            <select name="is_active" id="" class="form-control">
                @if($states->is_active == "0")
                    <option value="{{$states->is_active}}" selected>Active</option>
                    <option value="1">Inactive</option>
                @else
                    <option value="{{$states->is_active}}" selected>Inactive</option>
                    <option value="0">Active</option>
                @endif


            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
</div>
