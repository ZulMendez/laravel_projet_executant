<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users list') }}
        </h2>
    </x-slot>
    <div class="py-5">
        <div class="mx-auto sm:px-6 lg:px-8">
            @include('layouts.flash')
            <div class="container mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 mx-auto bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Prenom | Nom</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Avatar</th>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr class="text-center">
                                <td class="border px-4 py-2">{{ $user->prenom }} | {{ $user->nom }}</td>
                                <td class="border px-4 py-2">{{ $user->age }}y</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">{{ $user->imgAva }}</td>
                                <td class="border px-4 py-2">{{ $user->role->nom }}</td>
                                <td class="border px-4 py-2 flex justify-center">
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <h2 class="mx-auto text-red-600">Pas d'utilisateurs</h2>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
