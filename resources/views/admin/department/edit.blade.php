@extends('layout.app')

@section('body')

    <div class="col-lg-8 ">
        <h1> Edit Department</h1>
    </div>
    <div class="col-md-5 col-md-offset-3 ">
        <form action="{{route('admin.department.update',['id' => $department->id])}}" method="post">
            @csrf

            <div class="form-group " style="margin-top: 25px; ">
                <input type="text" class="form-control" name="department_name" value="{{$department->department_name}}">
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Lead: </label>
                <input type="text" class="form-control" name="lead" value="{{$department->lead}}">
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Parent Department: </label>
                <select name="parent_depart"  class="form-control">
                    @foreach($departs as $item)
                    <option value="{{$item->parent_depart}}">{{$item->parent_depart}}</option>
                    @endforeach
                    <option value="None">None</option>
                </select>
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Remark: </label>
                <textarea class="form-control" name="remark" >
                    {{$department->remark}}
                </textarea>
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Status: </label>
                <select name="is_active" id="" class="form-control">
                    @if($department->is_active == 0)
                        <option value="{{$department->is_active}}">Active</option>
                    @else
                        <option value="{{$department->is_active}}">Inactive</option>
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
@endsection
