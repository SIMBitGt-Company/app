<div class="container" id="DivRegBrand"  style="background: #212121" hidden>
    <div class="row">
        <div class="col-md-11 col-md-offset-0"><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Marca</div>
                <div class="panel-body">
                    <form id="frmRegBrand"class="form-horizontal" role="form">
                    <!--form id="frmRegBrand"class="form-horizontal" role="form" method="POST" action="{{ url('brand')}}"-->
                        <!--{{ csrf_field() }}-->

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" required autofocus></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                    <!--i class="fa fa-fw fa-save"></i>
                                    Guardar-->
                                </input>

                            </div>
                        </div>

                        <div id="mensaje" class="alert" hidden>
                            <strong></strong>
                        </div>
                        <!--@if(session()->has('msj'))
                            <div class="alert alert-success">
                                <strong>Exito!</strong> {{ session('msj') }}
                            </div>
                        @elseif(session()->has('msjerror'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ session('msjerror') }}
                            </div>
                        @endif-->
                    </form>
                </div>
                <div class="panel-footer">@Simbit</div>
            </div>
        </div>
    </div>
</div>


