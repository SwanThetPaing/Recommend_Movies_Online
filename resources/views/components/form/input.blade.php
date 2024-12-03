@props(['name','type'=>'text','value'=>'','user'])

<x-form.input-wrapper>
    <x-form.label :name="$name"/>
    <input required type="{{$type}}" name="{{$name}}" id="{{$name}}" value="{{old($name, $value)}}" style="border-radius: 30px; color: white; background-color: black;" class="form-control">

</x-form.input-wrapper>