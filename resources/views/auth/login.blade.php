@extends('layouts.app')

@section('content')
    <div class="h-full flex justify-center items-center">
        <div class="bg-white shadow-lg p-12 rounded-md">
            <div class="flex flex-col">
                <h2 class="font-black text-indigo-500 text-3xl text-center">Iniciar Sesion</h2>
                <div>
                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf
                        <div>
                            <div>
                                <input id="email" type="email" form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario o correo"
                                    class="focus:outline-none border-b-2 p-2 rounded-md">
                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div>
                                <input id="password" type="password" form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="Contraseña"
                                    class="focus:outline-none border-b-2 p-2 rounded-md">
                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-center items-center">
                                <button type="submit"
                                    class="bg-indigo-500 text-white font-bold py-2 w-full mx-10 rounded-md border-b-2 border-indigo-600 hover:bg-indigo-600">
                                    Ingresar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
