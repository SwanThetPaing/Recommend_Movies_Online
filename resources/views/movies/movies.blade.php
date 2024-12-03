<x-layout>

    @if(session('success')) 
        <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif

    <x-section :movies="$movies"/>    

</x-layout>
