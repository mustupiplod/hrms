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
        {{--        @foreach($questions as $question)--}}
        {{--        {{dd($questions)}}--}}
        <div class="col-md-12 ">
            <form action="{{route('admin.questionnaire.update',['id'=>$questions[0]->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Topic <b style="color: red;">*</b> </label>
                            <select name="topic" class="form-control">
                                <option value="{{$questions[0]->topic}}">{{$questions[0]->question_type}}</option>
                                {{--                                @foreach($types as $type)--}}
                                {{--                                    <option value="{{$type->id}}">{{$type->question_type}}</option>--}}
                                {{--                                @endforeach--}}
                            </select>
                        </div>
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Name <b style="color: red;">*</b> </label>
                            <input type="text" class="form-control" name="question_name"
                                   value="{{$questions[0]->question_name}}">
                        </div>

                        <div class="form-group">
                            <label for=""> Department <b style="color: red;">*</b> </label>
                            {{--                            <input type="text" name="department_id" class="form-control">--}}
                            <select name="department_id" class="form-control">
                                <option
                                    value="{{$questions[0]->department_id}}">{{$questions[0]->department_name}}</option>
                                    @foreach($departments as $type)
                                      <option value="{{$type->id}}">{{$type->department_name}}</option>
                                     @endforeach
                            </select>
                        </div>
                        <div class="form-group " style="margin-top: 25px;">
                            <label for="">Status: <b style="color: red;">*</b></label>
                            <select name="is_active" id="" class="form-control">
                                @if($questions[0]->is_active == 0)
                                    <option value="{{$questions[0]->is_active}}">Active</option>
                                @else
                                    <option value="{{$questions[0]->is_active}}">Inactive</option>
                                @endif
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group " style="margin-top: 25px; ">
                            <label>Questions <b style="color: red;">*</b></label>
                            <table class="table table-responsive">
                                <? $c = 1?>
                                @foreach($questions as $i => $value)
                                    <tr>
                                        <td>
                                            <label>Question {{$c}} </label>
                                            <input type="hidden" name="members[{{ $i }}][question_id]" value="{{$value->question_id}}">
                                            <input type="text" name="members[{{ $i }}][question]" class="form-control" value="{{$value->question}}"/>
                                        </td>
                                        <td>
                                            <label>Answer </label>
                                            <input type="text" name="members[{{ $i }}][answer]" class="form-control" value="{{$value->answer}}"/>
                                        </td>
{{--                                        <td>--}}
{{--                                            <a href="{{route('admin.questionnaire.questiondelete',['id'=>$value->question_id])}}" class="btn btn-danger">Delete</a>--}}
{{--                                        </td>--}}
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Option 1</label>
                                            <input type="text" name="members[{{ $i }}][option_1]" class="form-control" value="{{$value->option_1}}">
                                        </td>
                                        <td>
                                            <label>Option 2</label>
                                            <input type="text" name="members[{{ $i }}][option_2]" class="form-control" value="{{$value->option_2}}">
                                        </td>
                                        <td>
                                            <label>Option 3</label>
                                            <input type="text" name="members[{{ $i }}][option_3]" class="form-control" value="{{$value->option_3}}">
                                        </td>

                                    </tr>
                                    <? $c++ ?>
                                @endforeach
                            </table>
                            <table class=" table table-responsive">
                                <tbody id="data_table">
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
{{--                @foreach($answer_id as $answer)--}}
{{--                    <input type="hidden" name="field_id[]" value="{{$answer->question_id}}">--}}
{{--                @endforeach--}}
            </form>
            {{--            @endforeach--}}
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        var count = 1;

        dynamic_field(count);

        function dynamic_field(number)
        {
            field = '<tr>';
            field += '<td><label>Question ' + count + '</label><input type="text" name="question_[]" class="form-control" /></td>';
            field += '<td><label>Answer </label><input type="text" name="answer_[]" class="form-control" /></td></tr>';
            field += '<tr><td><label>Option 1</label><input type="text" name="option_1_[]" class="form-control" ></td>';
            field += '<td><label>Option 2</label><input type="text" name="option_2_[]" class="form-control" ></td>';
            field += '<td><label>Option 3</label><input type="text" name="option_3_[]" class="form-control" ></td>';
            if (number > 1)
            {

                field += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('#data_table').append(field);
            }
            else
            {

                field += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>';
                $('#data_table').html(field);

            }
        }

        $(document).on('click', '#add', function () {
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '.remove', function () {
            count--;
            // $(this).closest("tr").remove();
            var closestRow = $(this).closest('tr');
            closestRow.add(closestRow.prev()).remove();

        });

        $('#dynamic_form').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route("admin.questionnaire.update",['id'=>$questions[0]->id]) }}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $('#save').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.error) {
                        var error_html = '';
                        for (var count = 0; count < data.error.length; count++) {
                            error_html += '<p>' + data.error[count] + '</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                    } else {
                        dynamic_field(1);
                        $('#result').html('<div class="alert alert-success">' + data.success + '</div>');
                    }
                    $('#save').attr('disabled', false);
                }
            })
        });

    });
</script>
