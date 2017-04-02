<div class="container" id="DivRegOrder" style="background: #212121">
    <div class="row">
        <div class="col-md-11 col-md-offset-0"><br>
              <div class="panel-heading"><center><h3>Registrar Orden</h3></center></div>
                  <form id="fr1" name="fr1" class="form-horizontal" role="form" method="POST" action="">
                      <div class="panel-heading"><h4>Datos del propietario</h4></div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-2 control-label">E-mail</label>
                          <div class="col-md-5">
                              <input id="email" type="email" class="form-control" name="email" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="SearchOwner" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-user"></i>
                          </button>
                      </div>

                      <div class="form-group has-warning">
                          <label for="name" class="col-md-2 control-label">Nombre</label>
                          <div class="col-md-5">
                              <input id="name" type="text" class="form-control" name="name" disabled>
                          </div>
                     </div>

                      <div class="form-group has-warning">
                          <label for="nit" class="col-md-2 control-label">NIT</label>
                          <div class="col-md-5">
                              <input id="nit" type="text" class="form-control" name="nit" required autofocus disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="direction" class="col-md-2 control-label">Direccion</label>
                          <div class="col-md-5">
                              <input id="direction" type="text" class="form-control" name="direction" required autofocus disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="phone" class="col-md-2 control-label">Telefono Principal</label>
                          <div class="col-md-5">
                              <input id="phone" type="text" class="form-control" name="phone" required autofocus disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="phone2" class="col-md-2 control-label">Telefono Secundario</label>
                          <div class="col-md-5">
                              <input id="phone2" type="text" class="form-control" name="phone2" required autofocus disabled>
                          </div>
                      </div>
                      <br>

                      <div id='msjFrm1' class="">
                      </div>
                    </form>

                    <form id="fr2" name="fr2" class="form-horizontal" role="form" method="POST" action="">
                      <div class="panel-heading"><h4>Persona de Contacto</h4></div>

                      <div class="form-group{{ $errors->has('mail2') ? ' has-error' : '' }}">
                          <label for="mail2" class="col-md-2 control-label">E-mail</label>
                          <div class="col-md-5">
                              <input id="mail2" type="text" class="form-control" name="mail2" required autofocus>
                              @if ($errors->has('mail2'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mail2') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="SearchContact" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-user"></i>
                          </button>
                      </div>

                      <div class="form-group has-warning">
                          <label for="name2" class="col-md-2 control-label">Nombre</label>
                          <div class="col-md-5">
                              <input id="name2" type="text" class="form-control" name="name2" required autofocus disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="phone3" class="col-md-2 control-label">Telefono Principal</label>
                          <div class="col-md-5">
                              <input id="phone3" type="text" class="form-control" name="phone3" required autofocus disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="phone4" class="col-md-2 control-label">Telefono Secundario</label>
                          <div class="col-md-5">
                              <input id="phone4" type="text" class="form-control" name="phone4" required autofocus disabled>
                          </div>
                      </div>
                      <div id='msjFrm2' class="">
                      </div>
                      <br>
                    </form>

                    <form id="fr3" name="fr3" class="form-horizontal" role="form" method="POST" action="">

                      <div class="panel-heading"><h4>Datos del Vehiculo</h4></div>
                      <div class="form-group{{ $errors->has('plateX') ? ' has-error' : '' }}">
                          <label for="plateX" class="col-md-2 control-label">Placa No.:</label>
                          <div class="col-md-5">
                              <input id="plateX" type="text" class="form-control" name="plateX" required autofocus>
                              @if ($errors->has('plateX'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('plateX') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="SearchCarPlate" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-car"></i>
                          </button>
                      </div>

                      <div class="form-group has-warning">
                          <label for="frm3Brand" class="col-md-2 control-label">Marca:</label>
                          <div class="col-md-5">
                              <input id="frm3Brand" type="text" class="form-control" name="frm3Brand" disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="frm3Model" class="col-md-2 control-label">Modelo:</label>
                          <div class="col-md-5">
                              <input id="frm3Model" type="text" class="form-control" name="frm3Model" disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="frm3Color" class="col-md-2 control-label">Color:</label>
                          <div class="col-md-5">
                              <input id="frm3Color" type="text" class="form-control" name="frm3Color" disabled>
                          </div>
                      </div>
                      <div id='msjFrm3' class="">
                      </div>
                </form>
        </div>
    </div>
</div>
