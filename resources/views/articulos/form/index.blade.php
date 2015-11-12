          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Vista de Articulos</h3><br><a href="{!!URL::to('/articulos/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear Articulos</a> 
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;" id="busqueda">
                      <input type="text" id="q" name="q" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div>
<!--                
<div class="material-switch pull-right">
    <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
    <label for="someSwitchOptionSuccess" class="label-success"></label>
</div>
-->
                  <table class="table table-hover" id="table">
                    <thead>
                      <th>Titulo</th>
                      <th>Categoria</th>
                      <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span> Acciones</div></th>
                    </thead>
                    <tbody id="table_art"></tbody>
                  </table>
                  <input type="hidden" id="tipo" value="articulos">
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>