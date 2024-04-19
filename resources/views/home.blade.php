@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="mx-8 flex justify-between">
            <div>
                <p class="text-lg">Bienvenido&nbsp;<span class="font-black text-indigo-500">{{ Auth::user()->name }}</span>
                </p>
                <p class="text-sm text-gray-500"><i>Aqui podras registrar nuevos usuarios</i></p>
            </div>
            <div>
                <a href="{{ route('user.create') }}"
                    class="bg-indigo-500 text-white font-bold px-4 py-2 rounded-lg border-b-2 border-indigo-600 hover:bg-emerald-500
                    transition-all ease-in duration-600 hover:border-emerald-600">
                    Registrar nuevo
                </a>
            </div>
        </div>
        <div class="mx-4 mt-4">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="text-lg">UID</th>
                        <th class="text-lg">Nombres</th>
                        <th class="text-lg">Apellidos</th>
                        <th class="text-lg">Correo</th>
                        <th class="text-lg">Estado</th>
                        <th class="text-lg">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($users)
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-100">
                                <td class="text-center py-2">{{ $user->id }}</td>
                                <td class="text-center py-2">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->lastname }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    @if($user->status == 1)
                                        <span class="bg-green-100 py-1 px-2 rounded-md text-green-500">Activo</span>
                                    @else
                                        <span class="bg-red-100 py-1 px-2 rounded-md text-red-500">Inactivo</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('user.edit', $user->id)}}" class="bg-sky-500 p-1 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="m227.32 73.37l-44.69-44.68a16 16 0 0 0-22.63 0L36.69 152A15.86 15.86 0 0 0 32 163.31V208a16 16 0 0 0 16 16h44.69a15.86 15.86 0 0 0 11.31-4.69l83.67-83.66l3.48 13.9l-36.8 36.79a8 8 0 0 0 11.31 11.32l40-40a8 8 0 0 0 2.11-7.6l-6.9-27.61L227.32 96a16 16 0 0 0 0-22.63M48 179.31L76.69 208H48Zm48 25.38L51.31 160L136 75.31L180.69 120Zm96-96L147.32 64l24-24L216 84.69Z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('user.delete', $user->id)}}" class="bg-red-500 p-1 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M9 3v1H4v2h1v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1V4h-5V3zm0 5h2v9H9zm4 0h2v9h-2z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    @empty($users)
                        <tr class="hover:bg-gray-100">
                            <td colspan="6" class="text-black text-center">
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 ">
                                        <path fill="currentColor"
                                            d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0-18M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8-4v4H7V8zm8 0v4h-2V8zm-9.33 7.5A4.998 4.998 0 0 1 12 13a4.998 4.998 0 0 1 4.33 2.5l.501.865l-1.731 1.001l-.5-.865A2.995 2.995 0 0 0 12 15a3 3 0 0 0-2.6 1.5l-.5.866l-1.731-1.001z" />
                                    </svg>&nbsp;
                                    <span>No se encontraron registros</span>
                                </div>
                            </td>
                        </tr>
                    @endempty
                </tbody>
            </table>
        </div>
    </section>
@endsection
