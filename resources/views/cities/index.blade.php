<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if( $cities->count() )
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-4">ID</th>
                                <th scope="col" class="py-3 px-4">{{ __('Name') }}</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $city)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $city->id }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $city->name }}</td>
                            </tr>
                            @endforeach
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td colspan="3">&nbsp;</td>
                                <td scope="col" class="py-3 px-4">
                                    <a class="font-medium text-green-600 dark:text-green-500 hover:underline" href="{{ route('cities.create') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                           Insertar nueva cuidad
                                        </svg>                                          
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>