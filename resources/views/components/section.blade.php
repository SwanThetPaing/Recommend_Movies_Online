@props(['movies','user'])

<style>

#container 
{
    max-width: 1275px;
    margin: 0 auto;
    height: 100%;
    background-color: black;
}

</style>

<div class="container" id="container">

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
            style="border-radius: 0%; background-color: black; color:white;"
            placeholder="Search Movies..."
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

    <h1 class="col-md-3 mt-3">{{$movies->links()}}</h1> 

    <h5 class="mv-3 text-secondary align-items-start">
      
        {{$movies->count()}} availlable on this Page.
        
      </h5>

    <div class="row">

   

    @forelse($movies as $movie)

        <div class="col-md-3 mb-4" style="">
            <x-card :movie="$movie" />
        </div>

    @empty
    <p class="text-center" style="color: white; padding: 100px;">No Movies avialable right now</p>
    @endforelse

    </div>

</div>