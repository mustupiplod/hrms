@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-8 ">
        <h1>Degree's</h1>
        <div class="row">
            <div class="col-md-6 ">
                <a href="{{route('admin.degree.create')}}" class="btn btn-info">Add Degree</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>
    </div>
    <div class="col-md-7 mt-4">
        <table class="table  table-bordered">
            <th>Degree Name</th><th>Field</th><th>Status</th><th width="35%">Action</th>
            @foreach($degrees as $degree)
                <tr>
                    <td>
                        {{$degree->name}}
                    </td>
                    <td>
                        {{$degree->related}}
                    </td>
                    <td>
                        @if($degree->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{route('admin.degree.edit',['id'=>$degree->id])}}" class="btn btn-success pull-right ">Edit</a>
                        <a href="{{route('admin.degree.delete',['id'=>$degree->id])}}" class="btn btn-danger pull-right ">Delete</a>

                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
