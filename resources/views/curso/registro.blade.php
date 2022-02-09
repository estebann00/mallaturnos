<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <title>Provedores</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"></script>
    <script  src= "https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script  src= "https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
    <script  src= "https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" ></script>
    
</head>
 <body>   
 
 <div class=" card-center ">
        <div class="card-header text-white text-center bg-dark mb-3">
        <h1>Usuarios</h1>
        </div>
            <div class="card-header">
                <div class="form-group">
                    <form action="{{route('inicio.consultapdv')}}" method="get">
                    <div class="row justify-content-center">
                            <div class="col-md-2">
                                <h5 class="card-title" >CODIGO </h5> 
                                <input name="texto" class="form-control" type="text" placeholder="" value="{{$texto}}">
                                <button id="button" class="btn btn-outline-success" type="submit">Buscar</button>
                            </div>
                            <form method="post">
                            <div class="col-md-6">
                                <h5 class="card-title" >PUNTO VENTA </h5> 
                                <table class="TFtable">
                                <tbody>
                                @if ($consulta->count() == null)
                                <tr>
                                    <td colspan="8"> No hay registros</td>
                                </tr>
                                @else
                                @foreach($consulta as $item)
                                    <tr><input id="txtpdv" type="search" class="form-control" name="" value="{{ $item->pdv_nombre }} " placeholder="Punto de Venta" readonly="">                                           
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>                             
                            </div>
                            </form>
                    <form action="{{route('inicio.consultaasc')}}" method="get">
                    <div class="row justify-content-center">
                            <div class="col-md-2">
                                <h5 class="card-title" >CODIGO </h5> 
                                <input name="texto" class="form-control" type="text" placeholder="" value="{{$textou}}">
                                <button id="button" class="btn btn-outline-success" type="submit">Buscar</button>
                            </div>
                            <form method="post">
                            <div class="col-md-6">
                                <h5 class="card-title" >ASESOR COMERCIAL </h5> 
                                <table class="TFtable">
                                <tbody>
                                @if ($consultau->count() == null)
                                <tr>
                                    <td colspan="8"> No hay registros</td>
                                </tr>
                                @else
                                @foreach($consultau as $item)
                                    <tr><input id="txtpdv" type="search" class="form-control" name="" value="{{ $item->asc_nombre, asc_apellido }} " placeholder="Punto de Venta" readonly="">                                           
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>                             
                            </div>
                            </form>
                </div>
            </div>                     
        </div>
</body>
</html>

