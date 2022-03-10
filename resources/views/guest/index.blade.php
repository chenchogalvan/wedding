<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg grd-rows-2">

                            <div class="px-4 py-5 sm:px-6 bg-gray-50">
                                <h3 class="text-lg leading-6 font-bold text-gray-900">Agregar invitado</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Escribe la información del invitado a tu boda</p>
                                <div class="py-5">
                                    <a href="{{ route('guests.add') }}" class="bg-slate-900  py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar invitados a mi boda</a>
                                    <a href="{{ route('guests.send.all', Auth::user()->id) }}" class="bg-slate-900  py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enviar mensaje a todos</a>
                                    <a href="{{ route('guests.export') }}" class="bg-slate-900  py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Exportar lista de usuarios</a>
                                </div>
                            </div>

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Nombre</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Total invitados</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Invitación</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Fecha de envio</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Confirmación</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Fecha de Confirmación</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>

                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @if ($guests->count() == 0)

                                    <tr>
                                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                                            <div class="items-center text-center">
                                                <div class="text-center mb-3">No hay invitados registrados a mi boda</div>
                                                <a href="{{ route('guests.add') }}" class="bg-slate-900  py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar invitados a mi boda</a>

                                            </div>
                                        </td>
                                    </tr>
                                    @else

                                    @foreach ($guests as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{-- <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                </div> --}}
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $item->name }} </div>
                                                    <div class="text-sm text-gray-500">{{ $item->email }}</div>
                                                    <div class="text-sm text-gray-500">{{ $item->phone }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ( $item->inviteds > 1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> {{ $item->inviteds }} pases </span>
                                            @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> {{ $item->inviteds }} pase </span>
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ( $item->invitation == 1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Invitación enviada </span>
                                            @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Sin enviar </span>
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ( $item->invitation == 1)
                                            <div class="text-sm text-gray-900">{{ $item->invitation_date  }}</div>
                                            @else

                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ( $item->confirmed == 1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Confirmado </span>
                                            @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Sin confirmar </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ( $item->confirmed == 1)
                                            <div class="text-sm text-gray-900">{{ $item->confirmation_date }}</div>
                                            @else
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">

                                            @if ( $item->invitation == 1)
                                            <a href="{{ route('guests.send', $item->id) }}" class="ml-5 bg-indigo-600 py-2 px-6 border border-indigo-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Reenviar</a>
                                            @else
                                            <a href="{{ route('guests.send', $item->id) }}" class="ml-5 bg-indigo-600 py-2 px-6 border border-indigo-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enviar</a>
                                            @endif


                                            {{-- <button type="button" class="ml-5 bg-white py-2 px-6 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button> --}}


                                        </td>
                                    </tr>
                                    @endforeach

                                    @endif



                                </tbody>

                            </table>

                        </div>
                      </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    @push('modals')

    @if (Session::has('success'))
    <script>
        Swal.fire({
            title: '¡Invitación enviada!',
            html: "{!! Session::get('success') !!}",
            icon: 'success',
            confirmButtonText: '¡Excelente!'
        })
    </script>

    @endif
    @endpush

</x-app-layout>
