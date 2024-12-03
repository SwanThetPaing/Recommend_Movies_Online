@props(['seats','movies'])

<style>

#container 
{
    max-width: 1275px;
    margin: 0 auto;
    height: 100%;
    background-color: black;
}

</style>

<x-layout>

<div id="container">

<form action="" method="GET" class="my-3">
        <div class="input-group mb-3">

        @if(request('category'))
          <input
            name="category"
            type="hidden"
            value="{{request('category')}}"
          />
        @endif

        @if(request('username'))
          <input
            name="username"
            type="hidden"
            value="{{request('username')}}"
          />
        @endif

          <input
            name="search"
            type="text"
            value="{{request('search')}}"
            autocomplete="false"
            class=""
            style="border-radius: 20%;"
            placeholder="Search seats..."
          />

          <button
            class="input-group-text bg-primary text-light"
            id="basic-addon2"
            type="submit"
            style="margin-left: 10px; border-radius: 50%;"
          >
            Search
          </button>

        </div>
      </form>

    <h1 class="col-md-3 mt-3"></h1> 

    <h5 class="mv-3 text-secondary">
      
        {{$seats->count()}} availlable on this Page.
        
      </h5>

    <div class="row">

   

    @forelse($seats as $seat)

        <div class="col-md-1 mb-3 mt-4" style="margin: 0 auto;">
            <x-seat :seat="$seat"/>
        </div>

    @empty
    <p class="text-center" style="color: white; padding: 100px;">No seats avialable right now</p>
    @endforelse

    </div>

</div>

</x-layout>