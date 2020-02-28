<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</head>

<div class="col-lg-8 offset-2">
    <center><h1> Create Policy </h1></center>
</div>
<div class="col-md-5 offset-2 ">
    <form action="{{route('admin.policy.store')}}" method="post">
        @csrf
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Policy Title: <b style="color: red;">*</b> </label>
            <input type="text" name="policy_title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Description: <b style="color: red;">*</b></label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group " style="margin-top: 25px;">
            <label for="">Employee's: <b style="color: red;">*</b> </label>
            <select class="form-control" name="employees[]" multiple="multiple">
{{--                <option value="0">Select Employee</option>--}}
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->f_name}} {{$employee->l_name}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>

<?
use Illuminate\Support\Carbon;
$year = Carbon::now()->year;$month = Carbon::now()->month;$day = Carbon::now()->day;$sec = Carbon::now()->second;
    $res_id=$year.$month.$day.$sec;
?>
<script>
    CKEDITOR.replace( 'description' );
</script>
