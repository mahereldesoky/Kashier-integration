<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="container">
                        <a class="bg-slate-800 text-white rounded p-2 " href="{{ route('order.create') }}" >
                        create Order
                      </a>
                    
                        <table class="text-left w-full mt-2">
                            <thead class="bg-black flex text-white w-full">
                                <tr class="flex w-full mb-4">
                                    <th class="p-4 w-1/4">ID</th>
                                    <th class="p-4 w-1/4">Product Name</th>
                                    <th class="p-4 w-1/4">Price</th>
                                    <th class="p-4 w-1/4">Pay</th>
                                </tr>
                            </thead>
                        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody class="bg-grey-light flex flex-col items-center  overflow-y-scroll w-full" style="height: 50vh;">
                                @foreach ($orders as $order)
                                <tr class="flex w-full mb-4">
                                    <td class="p-4 w-1/4">{{ $order->id }}</td>
                                    <td class="p-4 w-1/4">{{ $order->product_name }}</td>
                                    <td class="p-4 w-1/4">{{ $order->price }}</td>
                                    <td class="p-4 w-1/4">
                                        <form action="{{ url('/orders-submit/'.$order->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="bg-slate-800 text-white rounded p-2">
                                                Pay Now
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
