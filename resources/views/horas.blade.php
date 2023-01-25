<style>
    th{
        padding: 5px;
        border: 1px solid black;
    }
    td{
        padding: 5px;
        border: 1px solid black;
    }
    
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                Hola {{ Auth::user()->name }}, aqui tienes tus horas.
                <table>
            <tr>
                <th>Asignatura</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
            @foreach ($horas as $hora)
                <tr>
                    <td>{{ $hora->asignatura_id }}</td>
                        @switch($hora->diaH)
                            @case(1)
                                <td>Lunes</td>
                                @break
                            @case(2)
                                <td>Martes</td>
                                @break
                            @case(3)
                                <td>Miércoles</td>
                                @break
                            @case(4)
                                <td>Jueves</td>
                                @break
                            @case(5)
                                <td>Viernes</td>
                                @break
                        @endswitch
                    @switch($hora->horaH)
                        @case(1)
                            <td>8:15 - 9:15</td>
                            @break
                        @case(2)
                            <td>9:15 - 10:15</td>
                            @break
                        @case(3)
                            <td>10:15 - 11:15</td>
                            @break
                        @case(4)
                            <td>11:45 - 12:45</td>
                            @break
                        @case(5)
                            <td>12:45 - 13:45</td>
                            @break
                        @case(6)
                            <td>13:45 - 14:45</td>
                            @break
                    @endswitch
                    <td>
                        <?php
                        $dataEdit = array($hora->diaH, $hora->horaH, $hora->asignatura_id);
                        $dataSerializeEdit = serialize($dataEdit);
                        $dataDestroy = array($hora->diaH, $hora->horaH);
                        $dataSerializeDestroy = serialize($dataDestroy);
                        ?>
                        <a href="/horas/edit/{{$dataSerializeEdit}}">Editar</a>
                        <a href="/horas/delete/{{$dataSerializeDestroy}}" onclick="confirmDelete()" class="bg-red-500 hover:bg-red-700 font-bold py-2 px-4 rounded">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
                    <a href="/horas/create">Añadir horas a las asignaturas</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
