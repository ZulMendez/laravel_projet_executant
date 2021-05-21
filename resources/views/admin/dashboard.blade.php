<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>
    <div class="mx-auto py-5">
        <div class="py-5">
            @include('layouts.flash')
            <div class="sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 mx-auto">
                        <div class="grid grid-cols-1 gap-4 text-center">
                            @foreach ($admin as $user)
                            <div class="mx-auto">
                                <img class="rounded" src="{{asset('img/avatar1.jpg')}}" alt="avatar1">
                                <h2 class="text-3xl">{{ $user->nom }} {{ $user->prenom }}</h2>
                                <p>{{ $user->email }}</p>
                                
                                @if ($user->id == Auth::id())
                                <p class="font-bold text-green-400 my-5">Tu es connecté</p>
                                @else
                                <div class="my-5 flex justify-center">
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Modifier</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
