@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>New Announcement</h4></div>
                <div class="panel-body">
                    <form class="form" role="form" method="POST" action="{{ url('/announcements') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                            <label for="title" class=" control-label">title</label>

                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder = "Title"  required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class=" control-label">content</label>

                            <div class="">
                                <textarea id="content" class="form-control" rows = "10" name="content" value="{{ old('content') }}"  required>
                                </textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                                <a href="{{url('announcements')}}" role ="button" class =" btn btn-primary"> Back</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
