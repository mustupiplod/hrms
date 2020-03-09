<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1> Add Questionnaire</h1>
        </div>
        <div class="col-md-12 ">
            <form action="{{route('admin.questionnaire.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Topic <b style="color: red;">*</b> </label>
                            <select name="topic" class="form-control">
                                <option value="0">Select</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->question_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Title <b style="color: red;">*</b> </label>
                            <input type="text" class="form-control" name="question_name">
                        </div>

                        <div class="form-group">
                            <label for=""> Department <b style="color: red;">*</b> </label>
                            <select name="department_id" class="form-control">
                                <option value="0">Select</option>
                                @foreach($departments as $type)
                                    <option value="{{$type->id}}">{{$type->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Status: <b style="color: red;">*</b></label>
                            <select name="is_active" id="" class="form-control">
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group " style="margin-top: 25px; ">
                            <label>Questions <b style="color: red;">*</b></label>
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>

{{--                        <div class="form-group " style="margin-top: 25px;">--}}
{{--                            <label for="">Valid Answer<b style="color: red;">*</b> </label>--}}
{{--                            <input type="text" name="valid_answer" class="form-control">--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        var count = 1;

        dynamic_field(count);

        function dynamic_field(number)
        {
            field = '<tr>';
            field += '<td><label>Question '+count+'</label><input type="text" name="question[]" class="form-control" /></td>';
            field += '<td><label>Answer </label><input type="text" name="answer[]" class="form-control" /></td>';
            field += '<tr><td><label>Option 1</label><input type="text" name="option_1[]" class="form-control"></td>';
            field += '<td><label>Option 2</label><input type="text" name="option_2[]" class="form-control"></td>';
            field += '<td><label>Option 3</label><input type="text" name="option_3[]" class="form-control"></td>';

            if(number > 1)
            {
                field += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('tbody').append(field);
            }
            else
            {
                field += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                $('tbody').html(field);
            }
        }

        $(document).on('click', '#add', function(){
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '.remove', function(){
            count--;
            // $(this).closest("tr").remove();
            var closestRow = $(this).closest('tr');
            closestRow.add(closestRow.prev()).remove();

        });

        $('#dynamic_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{ route("admin.questionnaire.store") }}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#save').attr('disabled','disabled');
                },
                success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>'+data.error[count]+'</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                    }
                    else
                    {
                        dynamic_field(1);
                        $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                    }
                    $('#save').attr('disabled', false);
                }
            })
        });

    });
</script>
