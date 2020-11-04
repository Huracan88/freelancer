<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if($project)
                Proyecto:
            @else
                Nuevo proyecto
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
                            {!! Form::open(['url' => 'project/insert','method'=>'get']) !!}
                            @php
                                $label_class = 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2';
                                $input_class = 'appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4'
                            @endphp
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    {!! Form::label('client_id','Cliente',['class'=>$label_class]) !!}
                                    {!! Form::select('client_id',$clients,null,['class'=>$input_class]) !!}
{{--                                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">--}}
{{--                                    <p class="text-red text-xs italic">Please fill out this field.</p>--}}
                                </div>
                                <div class="md:w-1/2 px-3">
                                    {!! Form::label('date','Fecha',['class'=>$label_class]) !!}
                                    {!! Form::text('date', \Carbon\Carbon::now()->format('Y-m-d'),['class'=>$input_class]) !!}
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-full px-3">
                                    {!! Form::label('name','Título del proyecto',['class'=>$label_class]) !!}
                                    {!! Form::text('name',null,['class'=>$input_class]) !!}

                                </div>
                            </div>

                            <div class="py-3">
                                <button type="submit"
                                   class="cursor-pointer bg-teal-400 hover:bg-teal-600 shadow-xl px-5 py-2 inline-block text-white rounded">
                                    Crear proyecto
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
</x-app-layout>
