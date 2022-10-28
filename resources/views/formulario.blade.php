@extends('Plantilla')
@section('contenido')

<div class="container mt-5 col-md-5 " style="background: rgb(145, 215, 218)"> 
    <div class="card text-center mb-5 fw-bold " style="background: rgb(177, 233, 235)">
        <div class="card-header">
        Altas Flores
        </div>
        
    <div class="card-body">
        
        <form class="m-4" method="post" action="">
            
            @csrf

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" id="">
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Color: </label>
                <input type="text" class="form-control" name="txtColor" id="">
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Cantidad: </label>
                <input type="number" class="form-control" name="txtCantidad" id="">
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Descripción: </label>
                <textarea type="text" class="form-control" name="txtDescripcion" id="" ></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label"> Costo: </label>
                <input type="number" class="form-control" name="txtCosto" id="">
                
                
            </div>
                
                
                
                
            
    </div>   
                
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Guardar</button>
        </form>
        
        </div>

    </div>

    </div>
@stop
