@props(['name' , 'type'=>'text' ])
<x-form.field>
    <x-form.lable name="{{$name}}"/>
    <input class="border border-gray-400 p-2 w-full "
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           value="{{ old($name) }}"
           required
    >
    <x-form.error name="{{$name}}"/>
</x-form.field>
