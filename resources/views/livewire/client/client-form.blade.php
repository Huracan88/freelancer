<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if($client->exists)
                Client: {{ $name }}
            @else
                New client
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
                            {!! Form::model($client, ['url' => '#', 'method'=>'post' , 'wire:submit.prevent'=>'submitForm'  ]) !!}


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
                                <div class="md:w-full px-3 mb-6 md:mb-0">
                                    <label for="name" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Name</label>
                                    <input type="text" id="name" name="name" wire:model="name"
                                    class="@error('name') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                    value="" />
                                    @error('name')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror

                                </div>

                            </div>


                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-full px-3">
                                    <label for="contact" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        Contact</label>
                                    <input type="text" id="contact" name="contact" wire:model="contact"
                                           class="@error('contact') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('contact')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Email</label>
                                    <input type="email" id="email" name="email" wire:model="email"
                                           class="@error('email') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('email')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label for="phone_number" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Phone Number</label>
                                    <input type="text" id="phone_number" name="phone_number" wire:model="phone_number"
                                           class="@error('phone_number') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4"
                                           value="" />
                                    @error('phone_number')
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

                                    @if($client->exists)
                                        Edit client
                                    @else
                                        Add client
                                    @endif
                                </button>

                                <a href="{!! url('client') !!}" class="cursor-pointer bg-teal-400 hover:bg-teal-600 px-5 py-2 mx-2
                                        inline-block text-white rounded disabled:opacity-50"> Back </a>
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
