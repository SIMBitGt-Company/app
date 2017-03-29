<div class="container" id="DivSearchUser"  style="background: #212121" hidden>
    <div class="row">
        <div class="col-md-11 col-md-offset-0"><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Usuario</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('user')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nommbre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">NIT</label>

                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit" required>

                                @if ($errors->has('nit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                            <label for="direction" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direction" type="text" class="form-control" name="direction" required>

                                @if ($errors->has('direction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Telefono Principal</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
                            <label for="phone2" class="col-md-4 control-label">Telefono Secundario</label>

                            <div class="col-md-6">
                                <input id="phone2" type="text" class="form-control" name="phone2" required>

                                @if ($errors->has('phone2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="notific" {{ old('notific') ? 'checked' : '' }}> Notificar Registro por e-mail
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4"> 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i>
                                    Guardar
                                </button>
                            </div>
                        </div>

                        @if(session()->has('msjUser'))
                            <div class="alert alert-success">
                                <strong>Exito!</strong> {{ session('msjUser') }}
                            </div>
                        @elseif(session()->has('msjerrorUser'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ session('msjerrorUser') }}
                            </div>
                        @endif

                    </form>
                </div>
                <div class="panel-footer">@Simbit</div>
            </div>
        </div>
    </div>
</div>


