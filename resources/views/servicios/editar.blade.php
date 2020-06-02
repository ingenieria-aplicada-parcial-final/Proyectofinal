@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('servicio.update',['id'=>$servicio->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Servicio</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Nombre:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre del Servicio" value="{{$servicio->nombre}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div><!--fin panel body-->
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="col-md-2 control-label"> Precio:</label>
                              <div class="col-md-9">
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                      <input type="text" require id="precio" name="precio" class="form-control" placeholder="Precio del Servicio" value="{{$servicio->precio}}"/>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    </div><!--fin panel body-->
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-2 control-label"> Descripción:</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" require id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del Servicio" value="{{$servicio->descripcion}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      </div><!--fin panel body-->
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-md-2 control-label"> Categoría:</label>
                                  <div class="col-md-9">
                                    <select class="form-control select" data-live-search="true" id="categoria_id" name="categoria_id">
                                      <option selected disabled value="0">Seleccione una Categoría</option>
                                        @foreach($categorias as $categoria)
                                          @if($servicio->categoria_id==$categoria->id)
                                            <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                                              @else
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                          @endif
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                          </div>
                        </div>
                        </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('servicio.index')}}" class="btn btn-default">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
          </div>
        </form>
      </div>
</div>
<!-- END RESPONSIVE TABLES -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Editar</b></h2>
@endsection

@section('men')
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
@endsection
