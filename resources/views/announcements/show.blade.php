@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$announcement->title}}</h3></div>

                <div class="panel-body" style = "text-align : justify; font-size: 15px;">
                    {{$announcement->content}}
                    <br>

                    <form method = "POST" action="{{route('announcements.destroy',['id' => $announcement->id])}}">
                      {{ csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      <div class="form-group">
                          <div class="text-center">
                              <a href="{{route('announcements.edit',['id' => $announcement->id])}}" role ="button" class =" btn btn-warning"> Edit</a>
                              <button type="submit" value = "delete" class="btn btn-danger">
                                  Delete
                              </button>
                              <a href="{{url('/announcements/')}}" role ="button" class =" btn btn-primary"> Back</a>

                          </div>
                      </div>
                    </form>
        </div>
    </div>
</div>
@endsection
