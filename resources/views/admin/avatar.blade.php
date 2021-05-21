<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatars') }}
        </h2>
    </x-slot>
    <div class="mx-auto">

        <div class="py-5 mx-auto">
            @include('layouts.flash')
            <div class="sm:px-6 lg:px-8">
                <div class="container mx-auto">
                    <div class="p-6 mx-auto">
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($avatars as $avatar)
                            <div class="mx-auto border">
                                <img class="py-10 mx-auto px-auto" width="200" src="{{asset($avatar->imgAva)}}"  alt="avatar">
                                <div class="my-5 flex justify-center">
                                    {{-- <a href="{{ route('avatar.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">show</a> --}}
                                    {{-- <form action="{{ route('avatar.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                                    </form> --}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>