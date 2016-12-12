@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row" >
                    <div class="col-md-9">
                      <strong><h2>Announcements</h2></strong>
                    </div>
                    <div class=" col-md-3">
                      <a href="{{url('announcements/create')}}"  role = "button" class ="btn btn-success" style = "margin-top: 20px;">Add Announcement</a>
                    </div>
                  </div>
                </div>

                <div class="panel-body">


                      @foreach($announcements as $key => $announcement)
                        <div class="row" >
                            <div class="col-md-9">
                              <h4>{{$announcement -> title}} </h4>
                            </div>
                            <div class="col-md-3">
                              <a href="{{route('announcements.show',['id' => $announcement->id])}}" role = "button" class ="btn btn-primary">View Announcement</a>
                            </div>
                      </div>
                      @endforeach



                </div>
            </div>
        </div>
    </div>
</div>



@endsection
