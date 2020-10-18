<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-3 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-6 text-2xl">
                        Clients List
                    </div>

                    <div class="flex mb-4">

                        <div class="py-6 w-2/3">
                            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-teal-400 text-white">
                                    <tr>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Name</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Contact</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Phone Number</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Email</td>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                            <span>&nbsp;</span>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        @foreach($clients as  $client)
                                        <tr @if($loop->even) class="bg-gray-100" @endif >
                                            <td class="w-1/3 text-left py-3 px-4">{{$client->name}}</td>
                                            <td class="w-1/3 text-left py-3 px-4">{{$client->contact}}</td>
                                            <td class="text-left py-3 px-4">{{$client->phone_number}}</td>
                                            <td class="text-left py-3 px-4">{{$client->email}}</td>
                                            <td>
                                                <span>Un boton</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                        </div>

                        <div class="w-1/3 py-6 px-8 ml-6">
                            <img src="{{asset('media/undraw_business_deal_cpi9.svg')}}" alt="clients illustration">
                        </div>


                    </div>



                </div>

            </div>
        </div>
    </div>
</x-app-layout>
