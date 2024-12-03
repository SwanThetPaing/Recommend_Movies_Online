@props(['movie'])

<style>

    #text1
    {
        color: black;
        font-size: 20px;
        text-decoration: none;
    }

    #text2 
    {
        color: black;
        font-size: 15px;
        text-decoration: none;
    }

    #card 
    {
        width: 300px;
        border: 1px solid black;
        background-color: lightyellow;
    }

    #like_button 
    {
      float: right;
      border: 2px solid black; 
      color: black;"
      border-radius: 50%;
    }

    #like_button:hover
    {
      float: right;
      border: 2px solid black; 
      color: white;
      border-radius: 50%;
    }


</style>

<div id="card" class="card">
            <img
              src='{{asset("storage/$movie->thumbnail")}}'
              class="card-img-top"
              alt="..."
              width="350px"
              height="350px"
              style="border: 1px solid black;"
            />
            <div class="card-body">
              <h3 id="text1" class="card-title">{{$movie->name}}</h3>

              <div class="tags">
                
                
                <span style="color: black;" class="badge bg-warning">{{$movie->category->name}}</span>
                <span style="color: lightgray; font-size: 14px;" class="badge bg-primary">- {{$movie->discount}} Discount</span>

                
              </div>

              <div class="tags my-2">
                
                <span id="text2">Recommendation Level - </span>
                <span id="text2" class="badge">{{$movie->rating}}</span>
                <span id="text2">
                  Released Date - <b class="badge" style="color: black; font-size: 14px;">{{$movie->released_date}}</b>
                </span>
                
              </div>
              <div class="badge bg-info mb-2">
              <span id="text2" class="badge">{{$movie->show_date}}</span><br>
              <span id="text2" class="badge">{{$movie->show_time}}</span>
              <span id="text2" class="badge"></span>
              </div>
               <form action="/movies/{{$movie->slug}}/like" method="post">
               
              @if(auth()->user())
              <a href="/movies/{{$movie->slug}}" class="btn btn-dark">Open Details</a>
              @else
              <a href="/login" class="btn btn-dark">Login To See Details</a>
              @endif

              @csrf
              @auth
              @if (auth()->user()->isLiked($movie))
                <button id="like_button" style="color: white;" class="btn btn-dark">Unlike</button>
              @else
                <button id="like_button" class="btn btn-outline-dark">Like</button>
              @endif
              @endauth

              </form>
  
              
              
            </div>
          </div>