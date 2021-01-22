<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {

            let table = $('.yajra-datatable');

            table.DataTable({
                processing: true,
                serverSide: true,
                pageLength: 50,
                order: [[ 5, 'desc' ]],
                ajax: "{{ route('data.show') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'ip', name: 'ip'},
                    {data: 'email', name: 'email'},
                    {data: 'source_id', name: 'source_id'},
                    {data: 'tracking_id', name: 'tracking_id'},
                    {data: 'time_stamp', name: 'time_stamp'},
                    /*{data: 'action', name: 'action',orderable: false, searchable: false},*/
                ]
            }/*,
            {
                processing: true,
                serverSide: true,
                ajax: "{{ route('data.filter') }}",
                data: function (d) {
                    d.start_date = $('#start-date').val(); // Pass along start date and end date here
                    d.end_date = $('#end-date').val();
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'ip', name: 'ip'},
                    {data: 'email', name: 'email'},
                    {data: 'source_id', name: 'source_id'},
                    {data: 'tracking_id', name: 'tracking_id'},
                    {data: 'time_stamp', name: 'time_stamp'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]
            }*/
            );

            /*$('#filter_form').on('submit', function(e) {
                table.draw();
                e.preventDefault();
            });*/

        });

    </script>
</html>
