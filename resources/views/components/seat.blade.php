@props(['seat','movie'])

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
        width: 80px;
        border: 1px solid black;
        background-color: lightyellow;
    }

    #like_button 
    {
      border: 2px solid black; 
      color: black;"
      border-radius: 50%;
    }

    #like_button:hover
    {
      border: 2px solid black; 
      color: white;
      border-radius: 50%;
    }


</style>

<div id="card" class="card">
          
            <div class="card-body">
              <h3 id="text1" class="card-title">{{$seat->name}}</h3>
              <span>

               <form action="/seats/{{$seat->id}}/book" method="post">

              @csrf
              @auth
              @if (auth()->user()->isBooked($seat))
                <button id="like_button" style="color: white;" class="btn btn-dark">You Booked</button>
              @else
                <button id="like_button" class="btn btn-outline-dark">Book</button>
              @endif
              @endauth

              </form>
              </span>
  
              
              
            </div>
          </div>