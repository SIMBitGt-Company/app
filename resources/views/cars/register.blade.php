<div class="container" id="DivRegCar"  style="background: #212121" hidden>
    <div class="row">
        <div class="col-md-11 col-md-offset-0"><br>
            <!--div class="panel panel-primary"-->
                <div class="panel-heading"><h3>Registrar Vehiculo</h3></div>
                <!--div class="panel-body"-->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('car')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('plate_number') ? ' has-error' : '' }}">
                            <label for="plate_number" class="col-md-4 control-label">Numero de Placa</label>

                            <div class="col-md-6">
                                <input id="plate_number" type="text" class="form-control" name="plate_number" required autofocus>

                                @if ($errors->has('plate_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plate_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label">Modelo</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" required autofocus>

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                            <label for="color" class="col-md-4 control-label">Color</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control" name="color" required>

                                @if ($errors->has('color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('engine_serial    ') ? ' has-error' : '' }}">
                            <label for="engine_serial" class="col-md-4 control-label">No. Serie del Motor</label>

                            <div class="col-md-6">
                                <input id="engine_serial" type="text" class="form-control" name="engine_serial" required>

                                @if ($errors->has('engine_serial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('engine_serial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('km_mi') ? ' has-error' : '' }}">
                            <label for="km_mi" class="col-md-4 control-label">Millaje</label>

                            <div class="col-md-6">
                                <input id="km_mi" type="text" class="form-control" name="km_mi" required>

                                @if ($errors->has('km_mi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('km_mi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="col-md-4 control-label">Marca</label>

                            <div class="col-md-6">
                                <select class="form-control" name="brand">
                                    @if(isset($marcas))
                                        @foreach($marcas as $marca)
                                            <option>{{ $marca->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>


                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-fw fa-save"></i>
                                    Guardar
                                </button>
                            </div>
                        </div>

                        @if(session()->has('msjCar'))
                            <div class="alert alert-success">
                                <strong>Exito!</strong> {{ session('msjCar') }}
                            </div>
                        @elseif(session()->has('msjerrorCar'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ session('msjerrorCar') }}
                            </div>
                        @endif

                    </form>
                <!--/div>
                <div class="panel-footer">@Simbit</div-->
            </div>
        </div>
    </div>
