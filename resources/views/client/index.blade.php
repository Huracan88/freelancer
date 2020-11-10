<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Clients') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-3">

                <x-button.basic text="Add client"
                                icon="plus-circle"
                                :url="action([\App\Http\Controllers\ClientController::class,'new'])"  />
            </div>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-3 bg-white border-b border-gray-200">

                    <div class="flex mb-4" >
                        <div class="py-4 px-8 w-full">
                            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-teal-400 text-white">
                                    <tr>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Name</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Contact</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Phone Number</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Email</td>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">
                                            <x-icons.plus-circle/>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        @foreach($clients as  $client)
                                        <tr @if($loop->even) class="bg-gray-100" @endif >
                                            <td class="text-left py-3 px-4">{{$client->name}}</td>
                                            <td class="w-1/3 text-left py-3 px-4">{{$client->contact}}</td>
                                            <td class="text-left py-3 px-4">{{$client->phone_number}}</td>
                                            <td class="text-left py-3 px-4">{{$client->email}}</td>
                                            <td>
                                                <x-button.basic :url="action('ClientController@edit',$client->id)" icon="pencil" text="Edit" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                        </div>

{{--                        <div class="w-1/3 py-6 px-8 ml-6">--}}
{{--                            <img src="{{asset('media/undraw_interview_rmcf.svg')}}" alt="clients illustration">--}}
{{--                        </div>--}}


                    </div>



                </div>

            </div>
        </div>
    </div>
</x-app-layout>
