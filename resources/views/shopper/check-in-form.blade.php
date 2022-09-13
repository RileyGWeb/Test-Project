<x-app-layout>
    <div id="viewport" class="mx-auto w-96 h-[50rem] mt-12 bg-white rounded-lg p-4">
        <h2>Choose your store:</h2>
        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap mt-6">
            <tbody>
            @if( is_iterable($stores) )
                @foreach($stores as $store)
                    <tr class="text-center">

                        <x-table-column>
                            {{ $store['store_name'] ?? null }}
                        </x-table-column>

                        <x-table-column>
                            @if( isset($store['uuid']) )
                            <a href="{{ route('store.check-in-form', ['store' => $store['uuid']]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                See locations
                            </a>
                            @endif
                        </x-table-column>

                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>


    

        <!-- <img src="/images/Frys.png" alt=""> -->
    </div>
</x-app-layout>