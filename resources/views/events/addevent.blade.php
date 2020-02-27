<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified Bootsrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>


    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-1">
            <div class="panelpanel-default">
                <br><br>
                <div class="panel-heading">
                    <h2> Add Event To The Calendar </h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{route('events.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Event Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Event Title"
                                   autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Event Color:</label>
                            <input type="color" class="form-control" name="color" placeholder="Event Color"
                                   autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Start-Date:</label>
                            <input type="text" id="startdate" class="form-control" name="start_date"
                                   placeholder="Event Start Date" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>End-Date:</label>
                            <input type="text" id="enddate" class="form-control" name="end_date"
                                   placeholder="Event End Date" autocomplete="off">
                        </div>

                        <input type="submit" class="btn btn-success" value="Add Event">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(function () {
    //     $("#startdate").datepicker({dateFormat: "dd-mm-yy"}).val()
    // });
    // $(function () {
    //     $("#enddate").datepicker({dateFormat: "dd-mm-yy"}).val()
    // });
    $(document).ready(function(){
        $("#startdate").datepicker({
            numberOfMonths: 1,
            minDate:0,
            dateFormat:"dd-mm-yy",
            onSelect: function(selected) {
                $("#enddate").datepicker("option","minDate", selected)
            }
        });
        $("#enddate").datepicker({
            numberOfMonths: 1,
            dateFormat:"dd-mm-yy",
            onSelect: function(selected) {
                $("#startdate").datepicker("option","maxDate", selected)
            }
        });
    });

</script>

</body>
</html>

