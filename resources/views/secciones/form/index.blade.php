<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Vista de Secciones</h3><br><a href="{!!URL::to('/secciones/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear Seccion</a>        
        <div class="box-tools">
          <div class="input-group" style="width: 150px;" id="busqueda">
            <input type="text" id="q" name="q" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="table">
          <thead>
            <th>Seccion</th>
            <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span> Acciones</div></th>
            <th>Estado</th>
          </thead>
          <tbody id="table_sec"></tbody>
        </table>
        <input type="hidden" id="tipo" value="secciones">
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

