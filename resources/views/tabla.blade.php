@extends('Plantilla')
@section('contenido')
    <div class="container mt-5 col-md-7"> 
        
            <table class="table table-info table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Color</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Costo</th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Gerbera</td>
                    <td>Rosa</td>
                    <td>49</td>
                    <td>Grandes con tallo grande</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rosas</td>
                    <td>Blancas</td>
                    <td>20</td>
                    <td>Bonitas</td>
                    <td>350</td>
                </tr>
                
                </tbody>
            </table>
        </table>
@stop
