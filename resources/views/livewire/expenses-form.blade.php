<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if($expense)
                Expense: {{ $description }}
            @else
                New expense
            @endif
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-3 sm:px-20 bg-white border-b border-gray-200">

                    <div class="flex mb-4">

                        <div class="py-6 w-2/3">
                            <!-- component -->
                            {!! Form::model($expense, ['url' => url('expenses/insert'),'method'=>'post' , 'wire:submit.prevent'=>'submitForm'  ]) !!}


                            @if($successMessage )
                            <div class="-mx-3 md:flex mb-6">
                                <p class="w-full p-3 rounded bg-green-100 text-green-800">
                                  <span class="align-baseline">  <x-icons.check /></span>
                                    {{$successMessage}}

                                    <button type="button" wire:click="$set('successMessage',null)"
                                            class="inline-flex text-left rounded-md p-2 text-green-500 hover:bg-green-300" >x</button>
                                </p>
                            </div>
                            @endif



                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="client_id" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Client</label>
                                    <select name="client_id" id="client_id" wire:model="client_id"
                                        class="@error('client_id') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                                        <option value="" selected >Operational expenses</option>
                                        @foreach($clients as $cl_id => $cl_val)
                                            <option value="{{ $cl_id }}">{{ $cl_val }}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label for="date" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Date</label>
                                    <input type="text" id="date" name="date" wire:model="date"
                                           class="@error('date') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('date')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-full px-3">
                                    <label for="description" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        Description</label>
                                    <input type="text" id="description" name="description" wire:model="description"
                                           class="@error('description') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('description')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3">
                                    <label for="amount" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        amount</label>
                                    <input type="text" id="amount" name="amount" wire:model="amount"
                                           class="@error('amount') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('amount')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:w-1/2 px-3">
                                    <label for="status" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">status</label>
                                    <select name="status" id="status" wire:model="status"
                                            class="@error('status') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                                        <option value="paid" selected>PAID</option>
                                        <option value="on due">ON DUE</option>
                                    </select>
                                    @error('status')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>


                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-full px-3">
                                    <label for="comments" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        comments</label>
                                    <input type="text" id="comments" name="comments" wire:model="comments"
                                           class="@error('comments') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('comments')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="py-3 inline-flex shadow-sm">
                                <button type="submit"
                                        class="cursor-pointer bg-teal-400 hover:bg-teal-600 px-5 py-2
                                        inline-block text-white rounded disabled:opacity-50">

                                    <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-flex" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>

                                    Add expense
                                </button>
                            </div>


                            {!! Form::close() !!}



                        </div>

                        <div class="w-1/3 py-6 px-8 ml-6">
                            <img src="{{asset('media/undraw_business_deal_cpi9.svg')}}" alt="clients illustration">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>



</div>
