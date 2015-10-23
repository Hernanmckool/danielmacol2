<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
  <div class="modal-dialog" role="document">
      <div class="container"> 
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
            <div class="panel panel-info">
              <div class="panel-heading"><h3 class="panel-title">Editar Secciones<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h3>
              </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3" align="center"> {!!Html::image('asset/img/sec.png', 'Secciones', array('class' => 'img-circle'))!!} </div>      
                      <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                          <tbody>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                          <input type="hidden" id="id">
                            <tr>
                              <td>Seccion:</td>
                              <td><input type="text" id="seccion" style="width: 100%;"></td>
                            </tr>
                          </tbody>
                        </table>                          
                      </div>
                  </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    <span class="pull-right">
                        {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'act_seccion', 'class'=>'btn btn-sm btn-warning'], $secure = null)!!}
                    </span>
                </div>              
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
