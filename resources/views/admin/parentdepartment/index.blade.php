@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-8 ">
        <h1>Parent Departments</h1>
        <div class="row">
            <div class="col-md-6 ">
                <a href="{{route('admin.parentdepartment.create')}}" class="btn btn-info">Add Parent Department</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>
    </div>
    <div class="col-md-7 mt-4">
        <table class="table  table-bordered">
            <th>Name</th><th>Status</th><th width="50%">Action</th>
            @foreach($parents as $parent)
                <tr>
                    <td>
                        {{$parent->name}}
                    </td>
                    <td>
                        @if($parent->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{route('admin.parentdepartment.edit',['id'=>$parent->id])}}" class="btn btn-success pull-right ">Edit</a>
                        <a href="{{route('admin.parentdepartment.delete',['id'=>$parent->id])}}" class="btn btn-danger pull-right ">Delete</a>

                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
