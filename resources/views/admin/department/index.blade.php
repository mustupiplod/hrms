@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-8 ">
        <h1>Departments</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('admin.department.create')}}" class="btn btn-info">Add Department</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>

    </div>
    <div class="col-md-9 mt-4">
        <table class="table  table-bordered">
            <th>Name</th><th>Parent Department</th><th>Lead</th><th>Remarks</th><th>Status</th><th>Action</th>
            @foreach($departments as $department)
                <tr>
                    <td>
                        {{$department->name}}
                    </td>
                    <td>
                        {{$department->parent_depart}}
                    </td>
                    <td>
                        {{$department->lead}}
                    </td>
                    <td>
                        {{$department->remark}}
                    </td>
                    <td>
                        @if($department->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.department.edit',['id'=>$department->id ]) }}" class="btn btn-success  ">Edit</a>
                        <a href="{{route('admin.department.delete',['id'=>$department->id ]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
{{--        <ul class="list-group">--}}
{{--            @foreach($departs as $depart)--}}
{{--                <li class="list-group-item">--}}
{{--                    <button type="submit">Delete</button>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
    </div>
@endsection
