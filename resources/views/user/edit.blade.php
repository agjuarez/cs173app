@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update',['id' => $user->id]) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">lastname</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{$user->lastname}}" placeholder = "Last Name"  required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">firstname</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{$user->firstname}}"  placeholder = "First Name"  required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">sex</label>

                            <div class="col-md-6">
                                <!-- <input id="sex" type="text" class="form-control" name="sex" value="{{ old('sex') }}" required> -->
                                <label class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="sex" id="sex" value="m" @if ($user->sex) == 'm' checked @endif> Male
                                </label>
                                <label class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="sex" id="sex" value="f" @if ($user->sex) == 'f' checked @endif> Female
                                </label>
                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control" name="birthday" value="{{$user->birthday}}"  placeholder = "DD-MM-YY" required>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$user->address}}"  placeholder = "Address" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('contactnumber') ? ' has-error' : '' }}">
                            <label for="contactnumber" class="col-md-4 control-label">contactnumber</label>

                            <div class="col-md-6">
                                <input id="contactnumber" type="text" class="form-control" name="contactnumber" value="{{$user->contactnumber}}"  placeholder = "09XXXXXXXXX" required>

                                @if ($errors->has('contactnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
