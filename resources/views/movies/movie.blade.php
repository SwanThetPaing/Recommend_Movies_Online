    <x-layout>

<!-- single movie section -->
<div class="mt-4 container" style="margin-bottom: 70px;">
  <div class="row">
    <div class="col-md-4 mx-auto text-center">
      <img
        src='{{asset("/storage/$movie->thumbnail")}}'
        class="card-img-top"
        alt="..."
      />
      <h3 class="my-3" style="color: white;">{{$movie->name}}</h3>

      <div class="badge bg" style="font-size: 20px;">Released Date :</div> <span style="color: white; font-size: 20px;">{{$movie->released_date}}</span><br>
        <div class="text-secondry badge bg-primary" style="color: white">{{$movie->created_at->diffForHumans()}}</div>
        <span class="text-secondry badge bg-primary" style="color: white">{{$movie->category->name}}</span>
        
        @auth 
        @if($movie->rating === 'High')
        <span class="text-secondry badge bg-primary" style="color: white">
          {{$movie->rating}}
        </span>
        @elseif($movie->rating === 'Low')
        <span class="text-secondry badge bg-danger" style="color: white">
          {{$movie->rating}}
        </span>
        @elseif($movie->rating === 'Moderate')
        <span class="text-secondry badge bg-warning" style="color: white">
          {{$movie->rating}}
        </span>
        @endif 
        
        @endauth

        <p class="lh-md mt-3" style="color: white">
            {!!$movie->content!!}
        </p>

      
    </div>
  </div>
</div>

<section class="container" style="margin-bottom: 100px;">
    <div class="col-md-8 mx-auto" style="margin: 0 auto;">
     

      <p class="d-inline-flex gap-1 mt-2">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            Leave Comments
        </button>
        <span>
          <h2 style="color: white;">Comment and spread happiness here!!</h2>
        </span>
    </p>
    </p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="background-color: black; width: 500px; height: 100px;">

        @auth 
        <x-comment-form :movie="$movie"/>
        @else 
        <p class="text-start"  style="color: white;">Please <a href="/login">Login</a> to comment</p>
        @endauth



    </div>
   </div>

    </div>
    
</section>

@if ($movie->comments->count())
  <x-comments :comments="$movie->comments()->latest()->paginate(2)"/>
@endif


</x-layout>
