<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="py-12">
            @include('layouts.flash')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="grid grid-cols-3 gap-4 text-center">
                            @foreach ($admin as $user)
                            <div class="py-20 border">
                                <h2 class="text-3xl">{{ $user->nom }} {{ $user->prenom }} | {{ $user->age }}y</h2>
                                <p>{{ $user->email }} | {{ $user->avatar }}</p>
                                @if ($user->id == Auth::id())
                                <p class="font-bold text-green-400 my-5">Tu es connecté</p>
                                @else
                                <div class="my-5 flex justify-center">
                                    <a href="{{ route('user.show', $user->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">show</a>
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
