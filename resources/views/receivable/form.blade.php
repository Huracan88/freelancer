<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Client account: <b>{{ $client->name }}</b> <br>
            @if($receivable)
            <small>Receivable record</small>
            @else
            <small>New receivable record</small>
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
                            {!! Form::model($receivable, [ 'url' => $url_send_form,'method'=>'post']) !!}
                            @php
                                $label_class = 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2';
                                $input_class = 'appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4'
                            @endphp

                            {!! Form::hidden('id',null,['class'=>$input_class]) !!}

                            <div class="md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    {!! Form::label('project_id','Project',['class'=>$label_class]) !!}
                                    {!! Form::select('project_id',$projects,null,['class'=>$input_class]) !!}
                                </div>
                                <div class="md:w-1/2 px-3">
                                    {!! Form::label('type','Type',['class'=>$label_class]) !!}
                                    {!! Form::select('type', ['debit'=>'Debit','credit'=>'Credit'] ,null,['class'=>$input_class]) !!}
                                </div>
                            </div>

                            <div class="md:flex mb-6">
                                <div class="md:w-1/2 px-3">
                                    {!! Form::label('amount','Amount',['class'=>$label_class]) !!}
                                    <div class="flex appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded">
                                        <span class="px-4 py-3">$</span>
                                    {!! Form::text('amount', null,['class'=>"w-full py-3 px-4"]) !!}
                                    </div>
                                </div>
                                <div class="md:w-1/2 px-3">
                                    {!! Form::label('date','Date',['class'=>$label_class]) !!}
                                    {!! Form::text('date', $receivable ? $receivable->date->format('Y-m-d') : \Carbon\Carbon::now()->format('Y-m-d'),['class'=>$input_class]) !!}
                                </div>

                            </div>
                            <div class="md:flex mb-6">
                                <div class="md:w-full px-3">
                                    {!! Form::label('comments','Comments',['class'=>$label_class]) !!}
                                    {!! Form::textarea('comments',null,['class'=>$input_class,'size'=>'20x3']) !!}

                                </div>
                            </div>

                            <div class="py-3 flex">
                                <div class="w-1/2">
                                    <button type="submit"
                                       class="cursor-pointer bg-teal-400 hover:bg-teal-600 shadow-xl px-5 py-2 inline-block text-white rounded">
                                        @if($receivable) Edit record @else Insert record @endif
                                    </button>
                                </div>

                                <div class="w-1/2 text-right">
                                    <a type="button" href="{{url()->previous()}}"
                                            class="cursor-pointer bg-gray-200 hover:bg-gray-300 shadow-xl px-5 py-2 inline-block text-gray-600 rounded">
                                        Cancel
                                    </a>
                                </div>
                            </div>


                            {!! Form::close() !!}



                        </div>

                        <div class="w-1/3 py-6 px-8 ml-6">
                            <img src="{{asset('media/undraw_Calculator_0evy.svg')}}" alt="clients illustration">
                        </div>


                    </div>



                </div>

            </div>
        </div>
    </div>
</x-app-layout>
