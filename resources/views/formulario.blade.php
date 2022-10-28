@extends('Plantilla')
@section('contenido')



<div class="container mt-5 col-md-5 " style="background: rgb(145, 215, 218)">
    @if($errors->any())

        @foreach($errors->all() as $error)



        @endforeach
    @endif 
    <div class="card text-center mb-5 fw-bold " style="background: rgb(177, 233, 235)">
        <div class="card-header">
        Altas Flores
        </div>
        
    <div class="card-body">
        
        <form class="m-4" method="post" action="GuardarRegistro">
            
            @csrf

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" id="" value="{{old('txtNombre')}}">
                <p class="text-secondary fst-Italic">{{$errors->first('txtNombre')}}</p>
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Color: </label>
                <input type="text" class="form-control" name="txtColor" id="" value="{{old('txtColor')}}">
                <p class="text-secondary fst-Italic">{{$errors->first('txtColor')}}</p>
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Cantidad: </label>
                <input type="number" class="form-control" name="txtCantidad" id="" value="{{old('txtCantidad')}}">
                <p class="text-secondary fst-Italic">{{$errors->first('txtCantidad')}}</p>
                
                
            </div>

            <div class="mb-3">
                <label class="form-label"> Descripción: </label>
                <textarea type="text" class="form-control" name="txtDescripcion" id="" value="{{old('txtDescripcion')}}"></textarea>
                <p class="text-secondary fst-Italic">{{$errors->first('txtDescripcion')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Costo: </label>
                <input type="number" class="form-control" name="txtCosto" id="" value="{{old('txtCosto')}}">
                <p class="text-secondary fst-Italic">{{$errors->first('txtCosto')}}</p>
                
                
            </div>
                
                
                
                
            
    </div>   
                
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Guardar</button>
        </form>
        
        </div>

    </div>

    </div>
@stop
