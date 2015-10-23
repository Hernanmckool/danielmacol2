<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
  <div class="modal-dialog" role="document">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
            <div class="panel panel-info">
              <div class="panel-heading"><h3 class="panel-title">HERNAN PEREZ<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h3>
              </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3" align="center"> {!!Html::image('asset/dist/img/user2-160x1603.jpg', 'User Image', array('class' => 'img-circle'))!!} </div>      
                      <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                          <tbody>
                            <tr>
                              <td>Nombre:</td>
                              <td><input type="text" id="nombre"></td>
                            </tr>
                            <tr>
                              <td>Apellido:</td>
                              <td><input type="text" id="apellido"></td>
                            </tr>
                            <tr>
                              <td>Email:</td>
                              <td><input type="text" id="email"></td>
                            </tr>
                          </tbody>
                        </table>                          
                      </div>
                  </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    <span class="pull-right">
                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                </div>              
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
