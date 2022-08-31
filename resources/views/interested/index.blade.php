@extends('layouts.app')

@section('css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
@endsection

@section('content')
    <h1 class="text-5xl text-center pt-4">Listado de personas interesadas</h1>
    <br>

    <div class="container mx-auto ml-6">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-8 border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300" id="dataTable">
                        <thead class="bg-blue-500">
                            <tr>
                                <th class="px-6 py-2 text-xs text-white"> Id </th>
                                <th class="px-6 py-2 text-xs text-white"> Nombre </th>
                                <th class="px-6 py-2 text-xs text-white"> Correo </th>
                                <th class="px-6 py-2 text-xs text-white"> País </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            @foreach($projects as $project)
                            <tr class="text-center whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500"> {{ $project->id }} </td>
                                <td class="px-6 py-4"> <div class="text-sm text-gray-900"> {{ $project->email }} </div> </td>
                                <td class="px-6 py-4"> <div class="text-sm text-gray-500"> {{ $project->name }} </div> </td>
                                <td class="px-6 py-4 text-sm text-gray-500"> {{ $project->country }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
