<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('titles.expenses')
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-3">

                <x-button.basic text="Add expense"
                                icon="plus-circle"
                                :url="action([\App\Http\Controllers\ExpenseController::class,'new'])"  />
            </div>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-3 sm:px-20 bg-white border-b border-gray-200">

                    <div class="flex mb-4">

                        <div class="py-6 w-full">
                            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-teal-400 text-white">
                                    <tr>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Date</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Client</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Description</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">Amount</th>
                                        <th class="text-left py-3 px-4 font-semibold text-sm">
                                            <x-icons.plus-circle/>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        @foreach($expenses as  $expense)
                                        <tr @if($loop->even) class="bg-gray-100" @endif >
                                            <td class="text-left py-3 px-4">{{$expense->date}}</td>
                                            <td class="text-left py-3 px-4"> -- </td>
                                            <td class="text-left py-3 px-4">{{$expense->description}}</td>
                                            <td class="w-1/3 text-left py-3 px-4">$ {{ number_format($expense->amount,2) }}</td>
                                            <td>
                                                <x-button.basic :url="action('ExpenseController@edit',$expense->id)" icon="pencil" text="Edit" />
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
