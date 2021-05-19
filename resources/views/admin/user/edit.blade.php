<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User id number: {{ $user->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" value="{{ $user->prenom }}" name="prenom" id="prenom"
                                    autocomplete="given-prenom"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('prenom')
                                        <p class="text-red-400 text-center">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="prenom" class="block text-sm font-medium text-gray-700">Last
                                    name</label>
                                <input type="text" value="{{ $user->nom }}" name="nom" id="nom"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('nom')
                                        <p class="text-red-400 text-center">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="age" class="block text-sm font-medium text-gray-700">Age
                                </label>
                                <input type="text" value="{{ $user->age }}" name="age" id="age"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('age')
                                        <p class="text-red-400 text-center">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" name="email" value="{{ $user->email }}" id="email"
                                    autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('email')
                                        <p class="text-red-400 text-center">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="avatar_id" class="block text-sm font-medium text-gray-700">Role </label>
                                <select id="avatar_id" name="avatar_id" autocomplete="avatar_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($avatars as $avatar)
                                        <option {{ $user->avatar->id == $avatar->id ? 'selected': '' }} value="{{ $avatar->id }}">{{ $avatar->imgAva }}</option>
                                    @endforeach

                                </select>
                                @error('avatar_id')
                                    <p class="text-red-400 text-center">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
