    @extends('main')

    @section('title', '| Register New Object')

    @section('assets')
    <link rel='stylesheet' href='/css/parsley.css' />
    @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lost and Found Register</div>
                <div class="panel-body">
                @if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('losts.store') }}">
                        {{ csrf_field() }}
      
                         <div class="form-group{{ $errors->has('finderName') ? ' has-error' : '' }}">
                            <label for="finderName" class="col-md-4 control-label">Finder Name:</label>

                            <div class="col-md-6">
                                <input id="finderName" type="text" class="form-control" name="finderName" value="{{ old('finderName') }}" required autofocus>

                                @if ($errors->has('finderName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finderName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('finderPhone') ? ' has-error' : '' }}">
                            <label for="finderPhone" class="col-md-4 control-label">Finder Phone:</label>

                            <div class="col-md-6">
                                <input id="finderPhone" type="text" class="form-control" name="finderPhone" value="{{ old('finderPhone') }}" required autofocus>

                                @if ($errors->has('finderPhone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finderPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lostFoundDescription') ? ' has-error' : '' }}">
                            <label for="lostFoundDescription" class="col-md-4 control-label"> Description:</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="" class="form-control" name="lostFoundDescription"></textarea>                                

                                @if ($errors->has('lostFoundDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lostFoundDescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group{{ $errors->has('lostFoundItemSize') ? ' has-error' : '' }}">
                            <label for="lostFoundItemSize" class="col-md-4 control-label">Item:</label>

                            <div class="col-md-6">
                                <label class="radio-inline"><input type="radio" name="lostFoundItemSize" value="Large Size">Large Size</label>
                                <label class="radio-inline"><input type="radio" name="lostFoundItemSize" value="Medium Size">Medium Size</label>
                                <label class="radio-inline"><input type="radio" name="lostFoundItemSize" value="Small Size">Small Size</label>

                                @if ($errors->has('LostFoundItemSize'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LostFoundItemSize') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lostFoundImportance') ? ' has-error' : '' }}">
                            <label for="lostFoundImportance" class="col-md-4 control-label">Importance:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="lostFoundImportance">
                                  <option value="High">High</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Low">Low</option>
                                </select>

                                @if ($errors->has('lostFoundImportance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lostFoundImportance') }}</strong>
                                    </span>
                                @endif
                            </p>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="image" class="col-md-4 control-label" >Photo Upload:</label>
                        <div class="col-md-6">
                        <input type="file" class="form-control"/>
                        </div>
                        </div>
          
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="{{ route('losts.index') }}" class="btn btn-primary">Cancel</a>
                            </div>
                           
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection