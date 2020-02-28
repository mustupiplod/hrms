
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified Bootsrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


    <title>Hrms</title>
</head>
<body>
@section('navbar')
<header class="header">
    <nav class="navbar navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="/">Hrms</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
@show
<section>
    <ul>
        <li>
            <a href="/admin/department"> Department</a>
        </li>
        <li>
            <a href="/admin/parentdepartment"> Parent-Department</a>
        </li>
        <li>
            <a href="/admin/designation"> Designation</a>
        </li>
        <li>
            <a href="/admin/shift"> Shifts</a>
        </li>
        <li>
            <a href="/admin/degree"> Degree</a>
        </li>
        <li>
            <a href="/admin/scale"> Scale</a>
        </li>
        <li>
            <a href="/admin/status"> Status</a>
        </li>
        <li>
            <a href="/admin/increament"> Increament</a>
        </li>
        <li>
            <a href="/admin/empincreament"> Employee Increament</a>
        </li>
        <li>
            <a href="/admin/currency"> Currency</a>
        </li>
        <li>
            <a href="/admin/education"> Education</a>
        </li>
        <li>
            <a href="/admin/maritalstatus"> MaritalStatus</a>
        </li>
        <li>
            <a href="/admin/employee"> Employee</a>
        </li>
        <li>
            <a href="/admin/team"> Teams</a>
        </li>
        <li>
            <a href="/admin/course"> Courses</a>
        </li>
        <li>
            <a href="/events"> Events</a>
        </li>
        <li>
            <a href="/admin/exitdetails">Exit-Details</a>
        </li>
        <li>
            <a href="/admin/policy">Company Policy</a>
        </li>
        <li>
            <a href="/admin/reason">Reasons</a>
        </li>
    </ul>
</section>
</body>
</html>


