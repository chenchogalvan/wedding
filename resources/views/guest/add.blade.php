<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest Add') }}
        </h2>
    </x-slot>

    <div class="md:container md:mx-auto py-12">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-bold text-gray-900">Agregar invitado</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Escribe la información del invitado a tu boda</p>
            </div>
            <form action="{{ route('guests.save') }}" method="post" autocomplete="off">
                @csrf
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">Nombre</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" value="{{ old('name') }}" name="name" id="name"  class="mt-1 focus:ring-slate-500 focus:border-slate-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">Apellido</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" value="{{ old('last_name') }}" name="last_name" id="last_name"  class="mt-1 focus:ring-slate-500 focus:border-slate-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('last_name')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">Teléfono (opcional)</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" value="{{ old('phone') }}" name="phone" id="phone" class="mt-1 focus:ring-slate-500 focus:border-slate-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('phone')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">Correo electronico</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="email" value="{{ old('email') }}" name="email" id="email" class="mt-1 focus:ring-slate-500 focus:border-slate-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>
                        <div class="bg-gray-50  px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">Cantidad</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="number" value="1" value="{{ old('inviteds') }}" name="inviteds" id="inviteds" class="mt-1 focus:ring-slate-500 focus:border-slate-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('inviteds')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>

                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-base font-bold text-gray-500">¿Enviar invitación directo?</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input id="send" name="send" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                @error('send')
                                    <div class="text-base text-red-500"> {{ $message }}</div>
                                @enderror
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-slate-600 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500">Guardar datos</button>
                </div>
            </form>

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



