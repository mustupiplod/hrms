@extends('layout.app')

@section('body')
    <div class="col-lg-8 ">
        <h1> New Department</h1>
    </div>
    <div class="col-md-5 col-md-offset-3 ">
        <form action="{{route('admin.department.store')}}" method="post">
            @csrf
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Name: <b style="color: red;">*</b> </label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Lead: <b style="color: red;">*</b></label>
                <input type="text" class="form-control" name="lead" >
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Parent Department: </label>
                <select name="parent_depart"  class="form-control">
                    <option value="0">Select Any</option>
                    @foreach($departs as $depart)
                    <option value="{{$depart->name}}">{{$depart->name}}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Remark: </label>
                <textarea class="form-control" name="remark" >

                </textarea>
            </div>
            <div class="form-group " style="margin-top: 25px;">
                <label for="">Status: <b style="color: red;">*</b></label>
                <select name="is_active"  class="form-control">
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
