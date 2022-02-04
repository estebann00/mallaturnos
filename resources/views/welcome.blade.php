<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class=" card-center ">
        <div class="card-header text-white text-center bg-dark mb-3">
        <h1>Usuarios</h1>
        </div>
            <div class="card-header">
                <div class="form-group">
                    <form action="">
                    <div class="row justify-content-center">
                            <div action="" class="col-md-2">
                                <h5 class="card-title" >CODIGO </h5> 
                                <input name="buscador" class="form-control me-2" type="search" placeholder="" aria-label="Search" value="">
                                <button id="button" class="btn btn-outline-success" type="submit">Buscar</button>
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title" >PUNTO VENTA </h5> 
                                <input id="txtpundodv" type="search" class="form-control" name="texto" placeholder="Punto de Venta" readonly="">
                            </div>
                    </div> 
                    </form>
                </div>
            </div>                     
        </div>
    </body>    
</html>

<script>       
$(document).ready(function(){

    $('#button').click(function(){
        var numcod=$('#cod').val();
        if (numcod!=''){
            $.ajax({
                url:"{{}}",
                method:'GET',
            })
        }
    })
})
</script>