<style>
    th{
        padding: 5px;
        border: 1px solid black;
        text-align: center;
    }
    td{
        padding: 5px;
        border: 1px solid black;
        text-align: center;
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
                    Hola {{ Auth::user()->name }}, aqui tienes tu horario.
                    <table style="margin: 20px 0px;">
                        <tr style="padding: 5px;">
                            <th>Horas</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                        <tr>
                            <th>8:15 - 9:15</th>
                            <td >Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                        <tr>
                            <th>9:15 - 10:15</th>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                        <tr>
                            <th>10:15 - 11:15</th>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                        <tr>
                            <th>11:15 - 11:45</th>
                            <td colspan="5" style="background-color: gray;">Recreo</td>
                        </tr>
                        <tr>
                            <th>11:45 - 12:45</th>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                        <tr>
                            <th>12:45 - 13:45</th>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                        <tr>
                            <th>13:45 - 14:45</th>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                            <td>Vacio</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
