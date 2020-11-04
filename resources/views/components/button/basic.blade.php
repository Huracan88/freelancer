{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal Blade View Component --}}
<a href="{{$url}}" title="{{$title}}"
   @if($confirm)  onclick="return confirm('Are you sure?')" @endif
   class="cursor-pointer bg-teal-400 hover:bg-teal-600 shadow-xl @if($icon != "" && $text!="") pl-2 pr-3 @else px-2 @endif py-2 inline-block text-white rounded text-sm ">
    @if($icon)<x-dynamic-component :component="$icon"/>@endif{{$text}}
</a>
