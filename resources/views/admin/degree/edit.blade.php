@extends('layout.app')

@section('body')

    <div class="col-lg-8 ">
        <h1> Edit Degree</h1>
    </div>
    <div class="col-md-5 col-md-offset-3 ">
        <form action="{{route('admin.degree.update',$degree->id)}}" method="post">
            @csrf
            <div class="form-group " style="margin-top: 25px; ">
                <label>Degree Name:</label>
                <input type="text" class="form-control" name="name" value="{{$degree->name}}">
            </div>
            <div class="form-group " style="margin-top: 25px; ">

                <label>Field</label>
                <select name="related" class="form-control">
                    <option value="{{$degree->related}}">{{$degree->related}}</option>
                    @foreach($degrees as $degree)
                        <option value="{{$degree->name}}">{{$degree->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group " style="margin-top: 25px;">
                <label for="">Status: </label>
                <select name="is_active" id="" class="form-control">
                    @if($degree->is_active == 0)
                        <option value="{{$degree->is_active}}">Active</option>
                    @else
                        <option value="{{$degree->is_active}}">Inactive</option>
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
