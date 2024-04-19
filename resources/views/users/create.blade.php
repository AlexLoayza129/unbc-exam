@extends('layouts.app')

@section('content')
    <section class="p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 text-indigo-500">
                <path fill="currentColor"
                    d="M9.195 18.44c1.25.714 2.805-.189 2.805-1.629v-2.34l6.945 3.968c1.25.715 2.805-.188 2.805-1.628V8.69c0-1.44-1.555-2.343-2.805-1.628L12 11.029v-2.34c0-1.44-1.555-2.343-2.805-1.628l-7.108 4.061c-1.26.72-1.26 2.536 0 3.256z" />
            </svg>
            <strong class="text-indigo-500">Regresar</strong>
        </a>
        <div class="mx-8 mt-4">
            <h2 class="text-center font-bold text-2xl text-emerald-500 mb-2">Registrar nuevo usuario</h2>
            <div class="flex justify-center">
                <form method="POST" action="{{ route('user.save') }}" class="space-y-4">
                    @csrf
                    <div>
                        <div>
                            <input id="name" type="text" @error('name') is-invalid @enderror"
                                name="name" required autocomplete="name" autofocus placeholder="Nombres"
                                class="focus:outline-none border-b-2 p-2 rounded-md">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div>
                            <input id="lastname" type="text"
                                name="lastname" required autocomplete="lastname" placeholder="Apellidos"
                                class="focus:outline-none border-b-2 p-2 rounded-md">
                        </div>
                    </div>
                    <div>
                        <div>
                            <input id="email" type="email" @error('email') is-invalid @enderror"
                                name="email" required autocomplete="email" placeholder="Correo"
                                class="focus:outline-none border-b-2 p-2 rounded-md">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div>
                            <input id="phone" type="phone" name="phone"
                                required autocomplete="emaiphonel" placeholder="Telefono"
                                class="focus:outline-none border-b-2 p-2 rounded-md">
                        </div>
                    </div>
                    <div>
                        <div class="col-md-6">
                            <input id="password" type="password"
                                @error('password') is-invalid @enderror" name="password" required
                                placeholder="Contraseña" autocomplete="new-password"
                                class="focus:outline-none border-b-2 p-2 rounded-md">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" name="password_confirmation"
                                placeholder="Repetir la contraseña" required autocomplete="new-password"
                                class="focus:outline-none border-b-2 p-2 rounded-md">
                        </div>
                    </div>
                    <div>
                        <div>
                            <button type="submit" class="bg-emerald-500 text-white font-bold w-full py-2 rounded-md">
                                <span>Registrar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
