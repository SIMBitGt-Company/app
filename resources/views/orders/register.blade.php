<div class="container" id="DivRegOrder" style="background: #212121">
    <div class="row">
        <div class="col-md-11 col-md-offset-0"><br>
              <div class="panel-heading"><center><h3>Registrar Orden</h3></center></div>
                  <form id="OR1" name="OR1" class="form-horizontal" role="form" method="POST" action="">
                      <div class="panel-heading"><h4>Datos del propietario</h4></div>
                      <div class="form-group{{ $errors->has('OR1_mail') ? ' has-error' : '' }}">
                          <label for="mail" class="col-md-2 control-label">E-mail</label>
                          <div class="col-md-5">
                              <input id="mail" type="email" class="form-control" name="mail" required autofocus>

                              @if ($errors->has('mail'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mail') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="OR1_btn" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-user"></i>
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

                      <div class="form-group" hidden>
                          <label for="id" class="col-md-2 control-label">id</label>
                          <div class="col-md-5">
                              <input id="id" type="text" class="form-control" name="id" disabled>
                          </div>
                     </div>

                      <br>

                      <div id='Msj' class="">
                      </div>
                    </form>

                    <form id="OR2" name="OR2" class="form-horizontal" role="form" method="POST" action="">
                      <div class="panel-heading"><h4>Persona de Contacto</h4></div>

                      <div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                          <label for="mail" class="col-md-2 control-label">E-mail</label>
                          <div class="col-md-5">
                              <input id="mail" type="text" class="form-control" name="mail" required autofocus>
                              @if ($errors->has('mail'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mail') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="OR2_btn" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-user"></i>
                          </button>
                      </div>

                      <div class="form-group has-warning">
                          <label for="name" class="col-md-2 control-label">Nombre</label>
                          <div class="col-md-5">
                              <input id="name" type="text" class="form-control" name="name" required autofocus disabled>
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
                      <div class="form-group" hidden>
                          <label for="id" class="col-md-2 control-label">id</label>
                          <div class="col-md-5">
                              <input id="id" type="text" class="form-control" name="id" disabled>
                          </div>
                     </div>
                      <div id='Msj' class="">
                      </div>
                      <br>
                    </form>

                    <form id="OR3" name="OR3" class="form-horizontal" role="form" method="POST" action="">

                      <div class="panel-heading"><h4>Datos del Vehiculo</h4></div>
                      <div class="form-group{{ $errors->has('plate') ? ' has-error' : '' }}">
                          <label for="plate" class="col-md-2 control-label">Placa No.:</label>
                          <div class="col-md-5">
                              <input id="plate" type="text" class="form-control" name="plate" required autofocus>
                              @if ($errors->has('plate'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('plate') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <button id="OR3_btn" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-car"></i>
                          </button>
                      </div>

                      <div class="form-group has-warning">
                          <label for="brand" class="col-md-2 control-label">Marca:</label>
                          <div class="col-md-5">
                              <input id="brand" type="text" class="form-control" name="brand" disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="model" class="col-md-2 control-label">Modelo:</label>
                          <div class="col-md-5">
                              <input id="model" type="text" class="form-control" name="model" disabled>
                          </div>
                      </div>

                      <div class="form-group has-warning">
                          <label for="color" class="col-md-2 control-label">Color:</label>
                          <div class="col-md-5">
                              <input id="color" type="text" class="form-control" name="color" disabled>
                          </div>
                      </div>

                      <div class="form-group" hidden>
                          <label for="id" class="col-md-2 control-label">id</label>
                          <div class="col-md-5">
                              <input id="id" type="text" class="form-control" name="id" disabled>
                          </div>
                     </div>

                      <div id='Msj' class="">
                      </div>
                </form>

                <form id="OR4" name="OR4" class="form-horizontal" role="form" method="POST" action="">

                  <div class="panel-heading"><h4>Detalle de la Orden</h4></div>
                  <div class="form-group{{ $errors->has('fuel_level') ? ' has-error' : '' }}">
                      <label for="fuel_level" class="col-md-2 control-label">Nivel de Combustible:</label>
                      <div class="col-md-5">
                          <input id="fuel_level" type="text" class="form-control" name="fuel_level" required autofocus>
                          @if ($errors->has('fuel_level'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('fuel_level') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('mi') ? ' has-error' : '' }}">
                      <label for="mi" class="col-md-2 control-label">Millaje/Km:</label>
                      <div class="col-md-5">
                          <input id="mi" type="text" class="form-control" name="mi" required autofocus>
                          @if ($errors->has('mi'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('mi') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="observations" class="col-md-2 control-label">Observaciones:</label>
                      <div class="col-md-5">
                          <textarea id="observations" type="text" class="form-control" name="observations" autofocus>
                          </textarea>
                      </div>
                  </div>
                  <br>
                  <hr>
                  <div class="form-group">
                    <div id="fine-uploader-validation"></div>
                    <script>
                      $('#fine-uploader-validation').fineUploader({
                          template: 'qq-template-validation',
                          request: {
                              endpoint: '/server/uploads'
                          },
                          thumbnails: {
                              placeholders: {
                                  waitingPath: '/source/placeholders/waiting-generic.png',
                                  notAvailablePath: '/source/placeholders/not_available-generic.png'
                              }
                          },
                          validation: {
                              allowedExtensions: ['jpeg', 'jpg', 'png'],
                              itemLimit: 6,
                              //sizeLimit: 51200 // 50 kB = 50 * 1024 bytes
                          }
                      });
                  </script>
                  </div>
                  <hr>
                  <br>

                  <div class="form-group">
                    <center>
                    <button id="OR4_btn" type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i>
                      Guardar Orden de Servicio
                    </button>
                  </center>
                  </div>

                  <div id='Msj' class="">
                  </div>

            </form>
        </div>
    </div>
</div>
