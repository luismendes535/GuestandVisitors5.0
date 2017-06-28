    @extends('main')

    @section('title', '| Create New Drop')

    @section('assets')
    <link rel='stylesheet' href='/css/parsley.css' />
    @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Drop Check-in</div>
                <div class="panel-body">
 
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('drops.store') }}">
                        {{ csrf_field() }}
                    
                        <div class="form-group{{ $errors->has('dropperCompany') ? ' has-error' : '' }}">
                            <label for="dropperCompany" class="col-md-4 control-label">Company Name:</label>

                            <div class="col-md-6">
                                <input id="dropperCompany" type="text" class="form-control" name="dropperCompany" value="{{ old('dropperCompany') }}" required autofocus>

                                @if ($errors->has('dropperCompany'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dropperCompany') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dropperName') ? ' has-error' : '' }}">
                            <label for="dropperName" class="col-md-4 control-label">Dropper Name:</label>

                            <div class="col-md-6">
                                <input id="dropperName" type="text" class="form-control" name="dropperName" value="{{ old('dropperName') }}" required autofocus>

                                @if ($errors->has('dropperName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dropperName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ReceiverName') ? ' has-error' : '' }}">
                            <label for="ReceiverName" class="col-md-4 control-label">Receiver Name:</label>

                            <div class="col-md-6">
                                <input id="ReceiverName" type="text" class="form-control" name="ReceiverName" value="{{ old('ReceiverName') }}" required autofocus>

                                @if ($errors->has('ReceiverName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ReceiverName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dropItem') ? ' has-error' : '' }}">
                            <label for="dropItem" class="col-md-4 control-label">Item:</label>

                            <div class="col-md-6">
                                <label class="radio-inline"><input type="radio" name="dropItem" value="L">Large Size</label>
                                <label class="radio-inline"><input type="radio" name="dropItem" value="M">Medium Size</label>
                                <label class="radio-inline"><input type="radio" name="dropItem" value="S">Small Size</label>

                                @if ($errors->has('dropItem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dropItem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dropImportance') ? ' has-error' : '' }}">
                            <label for="dropImportance" class="col-md-4 control-label">Importance:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="dropImportance">
                                  <option value="3">High</option>
                                  <option value="2">Medium</option>
                                  <option value="1">Low</option>
                                </select>

                                @if ($errors->has('dropImportance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dropImportance') }}</strong>
                                    </span>
                                @endif
                            </p>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dropDescription') ? ' has-error' : '' }}">
                            <label for="dropDescription" class="col-md-4 control-label"> Description:</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="" class="form-control" name="dropDescription"></textarea>                                

                                @if ($errors->has('dropDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dropDescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                    Register
                                </button>
                                <a href="{{ route('drops.index') }}" class="btn btn-default">Cancel</a>
                            </div>
                           
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection