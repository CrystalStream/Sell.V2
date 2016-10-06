@extends('index')
@section('title','Configurar cajas')

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-4">
        <div class="alert alert-danger black">
            <h4 class="config-title">Caja chica</h4>
            <div class="row">
                <p class="box-text">
                    Dinero actual en caja chica: <span class="pull-right">$320</span>
                </p>
                <p class="box-text">
                    Dinero actual en caja roja: <span class="pull-right">$1000</span>
                </p>
                                               
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-8">
        <div class="alert alert-info black">
            <h4 class="config-title">Registrar Gasto</h4>
            <div class="row">
                <div class="col-xs-12">
                    <form action="">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-info">
                                <input type="radio" name="caja" id="male" autocomplete="off"> Caja chica
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="caja" id="female" autocomplete="off"> Caja Roja
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-12">
                               Gasto monetario
                            </label>
                            <div class="col-xs-12 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                    <input type="text" class="form-control">
                                </div> 
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-12 mt">
                               Descripcion del gasto
                            </label>
                            <textarea name="" id="" cols="15" rows="5" class="form-control" style="resize:none;"></textarea>   
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Registrar gasto">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 mt">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <span class="black">Gastos</span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-config">
                        <thead>
                            <tr>
                                <th class="text-center">Trabajador(a)</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Gasto $</th>
                                <th class="text-center">Tipo de caja</th>
                                <th class="text-center">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody class="black text-center">
                            <tr>
                                <td>Hola</td>
                                <td>Hola</td>
                                <td>Hola</td>
                                <td>Hola</td>
                                <td>Chica</td>
                                <td>
                                    <button data-toggle="modal" data-target=".edit" type="button"  class="btn btn-warning btn-sm"><i class="fa fa-pencil" ></i></button>                        
                                </td>
                            </tr>                              
                            <tr>
                                <td>Mundo</td>
                                <td>Mundo</td>
                                <td>Mundo</td>
                                <td>Mundo</td>
                                <td>Roja</td>
                                <td>
                                    <button data-toggle="modal" data-target=".edit"  type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button> 
                                </td>
                            </tr>                                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="">
        <div class="modal fade edit">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Editar gasto</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                   <label for="">Trabajador(a):</label>
                                   <div class="input-group">
                                       <div class="input-group-addon">
                                           <i class="fa fa-user"></i>
                                       </div>
                                       <input type="text" class="form-control" disabled>
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                   <label for="">Fecha:</label>
                                   <div class="input-group">
                                       <div class="input-group-addon">
                                           <i class="fa fa-calendar"></i>
                                       </div>
                                       <input type="text" class="form-control" disabled>
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                   <label for="">Gasto:</label>
                                   <div class="input-group">
                                       <div class="input-group-addon">
                                           <i class="fa fa-usd"></i>
                                       </div>
                                       <input type="text" class="form-control" disabled>
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                   <label for="">Tipo de caja:</label>
                                   <select name="" id="" class="form-control">
                                       <option value="0">Escoje la caja</option>
                                       <option value="1">Caja chica</option>
                                       <option value="2">Caja roja</option>
                                   </select>
                                </div>
                            </div>                                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Editar gasto</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection