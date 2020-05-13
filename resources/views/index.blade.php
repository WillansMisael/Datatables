<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataTables</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <table id="users" class="table">
                <thead>
                    <tr>    
                        <th with="10px">ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th with="120px">&nbsp;</th>
                    </tr>
                </thead>
               
            </table>
        </div>




        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                    "ajax": "{{ url('api/users') }}",
                    "columns": [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'btn'}
                    ],
                    "language": {
                        "info": "_TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select>'+
                                        '<option value="10">10</option>'+
                                        '<option value="30">30</option>'+
                                        '<option value="-1">Todos</option>'+
                                        '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords":"No hay coincidencias",
                        "infoEmpty": "_TOTAL_ registros",
                        "infoFiltered":"",
                    }
                    /*
                    Tambien para poder configurar todo a español 
                    se puede adicionar  'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                    en language
                    */
                });
            });
        </script>
    </body>
</html>
