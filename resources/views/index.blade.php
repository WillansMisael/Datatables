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
            <table id="users">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#users').DataTable();
            });
        </script>
    </body>
</html>
