@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-8 ">
        <h1>Shifts</h1>
        <div class="row">
            <div class="col-md-6 ">
                <a href="{{route('admin.shift.create')}}" class="btn btn-info">Add Shift</a>
            </div>
            <div class="col-md-6 ">
                <a href="/" class="btn btn-info" style="float:right;">Exit</a>
            </div>
        </div>

    </div>
    <div class="col-md-9 mt-4">
        <table class="table  table-bordered ">
            <th width="15%">Name</th> <th width="15%">Shift-Type</th> <th width="10%">Start-Time</th> <th width="10%">End-Time</th> <th width="15%">Total-Time</th> <th width="10%">Status</th> <th width="25%">Action</th>
            @foreach($shifts as $shift)
                <tr>
                    <td>
                        {{$shift->name}}
                    </td>
                    <td>
                        {{$shift->type}}
                    </td>
                    <td>
                        <input type="time" value="{{$shift->start_time}}" readonly   style=";border: 0;">
                    </td>
                    <td>
                        <input type="time" value="{{$shift->end_time}}" readonly   style="border: 0;">
                    </td>
                    <td>
                        {{$shift->total_time}}
                    </td>
                    <td>
                        @if($shift->is_active == 0)
                            <span>Active</span>
                        @else
                            <span> Inactive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{route('admin.shift.edit',['id'=> $shift->id]) }}" class="btn btn-success pull-right ">Edit</a>
                        <a href="{{route('admin.shift.delete',['id'=> $shift->id]) }}" class="btn btn-danger pull-right ">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection
