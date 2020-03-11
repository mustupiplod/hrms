<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<div class="col-lg-8 offset-2">
    <center><h1> Add Leave-Type </h1></center>
</div>
<div class="col-md-5 offset-2 ">
{{--    <form action="{{route('admin.leavetype.store')}}" method="post">--}}
        @csrf
<select class="form-control" name="country" id="country">
    <option value="">Select Country</option>
    @foreach ($countries as $country)
        <option value="{{$country->country_id}}">
            {{$country->country_name}}
        </option>
    @endforeach
</select>

<select class="form-control" name="state" id="state">
</select>

<select class="form-control" name="city" id="city">
</select>
{{--    </form>--}}
</div>
<script>
    $('#country').change(function(){
        var cid = $('#country').val();
        if(cid){
            $.ajax({
                type:"get",
                url:"/state/"+cid,
                success:function(res)
                {
                    if(res)
                    {
                        $("#state").empty();
                        $("#city").empty();
                        $("#state").append('<option>Select State</option>');
                        $.each(res,function(key,value){
                            $("#state").append('<option value="'+value.state_id+'">'+value.state_name+'</option>');
                        });
                    }
                }

            });
        }
    });
    $('#state').change(function(){
        var sid = $('#state').val();
        if(sid){
            $.ajax({
                type:"get",
                url:"/city/"+sid,
                success:function(res)
                {
                    if(res)
                    {
                        $("#city").empty();
                        $("#city").append('<option>Select City</option>');
                        $.each(res,function(key,value){
                            $("#city").append('<option value="'+value.city_id+'">'+value.city_name+'</option>');
                        });
                    }
                }

            });
        }
    });
</script>
