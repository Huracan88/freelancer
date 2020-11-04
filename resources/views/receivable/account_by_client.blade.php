<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Client account: <b>{{ $client->name }}</b>
        </h2>
    </x-slot>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 sm:px-20 bg-white border-b border-gray-200">
                <div class="flex flex-wrap content-center">
                    <div class="text-lg w-1/2">Current balance: <b>$ {{ number_format( $records->where('type','debit')->sum('amount') - $records->where('type','credit')->sum('amount'),2)  }}</b></div>
                    <div class="content-end w-1/2 text-right">
                        <a type="button" href="{{url('client')}}"
                           class="cursor-pointer bg-gray-200 hover:bg-gray-300 shadow-xl px-5 py-2 inline-block text-gray-600 rounded">
                            Back to clients
                        </a>
                        <x-button.basic text="Add record" :url="action('ReceivableController@newRecordForm',['client'=>$client->id])" />
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="p-3 sm:px-20 bg-white border-b border-gray-200">

                <div class="flex mb-4">

                    <div class="py-4 w-full">

                        <div class="shadow overflow-hidden rounded border-b border-gray-200">
                            <table class="w-full bg-white text-sm">
                                <thead class="bg-teal-400 text-white">
                                <tr>
                                    <th class="text-center py-3 px-4 font-semibold text-sm">Date</th>
                                    <th class="text-center py-3 px-4 font-semibold text-sm w-3/12">Project</th>
                                    <th class="text-center py-3 px-4 font-semibold text-sm">Debit</th>
                                    <th class="text-center py-3 px-4 font-semibold text-sm">Credit</th>
                                    <th class="text-center py-3 px-4 font-semibold text-sm">Comments</th>
                                    <th class="text-center py-3 px-4 font-semibold text-sm">
                                        <x-icons.menu/>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-800">
                                    @foreach($records as  $record)
                                    <tr @if($loop->even) class="bg-gray-100" @endif >
                                        <td class="text-left py-3 px-4">{{$record->date->format('d/m/Y')}}</td>
                                        <td class="text-left py-3 px-4">{{$record->project->name}}</td>
                                        @if($record->type == 'debit')
                                            <td class="text-right py-3 px-4 whitespace-no-wrap">$ {{ number_format($record->amount,2) }}</td>
                                            <td>&nbsp;</td>
                                        @else
                                            <td>&nbsp;</td>
                                            <td class="text-right py-3 px-4 whitespace-no-wrap">$ {{ number_format($record->amount,2) }}</td>
                                        @endif
                                        <td class="text-left py-3 px-4">{{$record->comments}}</td>
                                        <td class="pr-2">
                                            <div class="whitespace-no-wrap">
                                            <x-button.basic :url="action('ReceivableController@editRecordForm',[$client->id,$record->id])"
                                                            icon="pencil" title="Edit record" />

                                            <x-button.basic :url="action('ReceivableController@doDelete',[$record->id])"
                                                            :confirm="true"
                                                            icon="trash" title="Delete record" />
                                            </div>

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
    </div>

</x-app-layout>
