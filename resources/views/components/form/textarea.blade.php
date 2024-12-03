@props(['name', 'value'=>''])

<x-form.input-wrapper>
    <x-form.label :name="$name" />
    
    <textarea name="{{$name}}" id="{{$name}}" style="height: 300px; border-radius: 30px; color: white; background-color: black;" cols="30" rows="30"  class="form-control editor">{!!old($name, $value)!!}</textarea>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>