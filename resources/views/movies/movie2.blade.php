



<style>

#leave_comment
{
    color: white;
    background-color: black;
}

#leave_comment:hover
{
    color: white;
    background-color: blue;
}

@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
 
  .form-box{
    padding-left: 30px;
  position:relative;
  width:370px;
  top: 50%;
  border:2px solid rgba(255,255,255,0.5);
  border-radius:20px;
  backdrop-filter:blur(15px);
  display:flex;
  justify-content:center;
  align-items:center;
  }

    .form-box:before, #form:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        border-radius:20px;
        background: linear-gradient(40deg, blue, black, white, black);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation:  20s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    .form-box:after 
    {
        filter: blur(50px);
    }
    

  
#form 
    {
        width: 370px;
        height: 140px;
        align: center;
        padding: 10px;
        top: 100px;
        background-color: black;
        margin-left: 440px;
        margin: 0 auto;
        margin-top: 18px;
        border-radius: 25px;
	    position: relative;
	    background: linear-gradient(0deg, #000, #272727);
    }

    #form:before, #form:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        border-radius: 20px;
        background: linear-gradient(40deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
            #0000ff, #00ff00,#ffff00, #ff0000);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation:  20s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    #form:after 
    {
        filter: blur(50px);
    }
    
/* 
    
#img 
    {
        align: center;
        padding: 10px;
        top: 100px;
        background-color: black;
        margin-left: 440px;
        margin: 0 auto;
        border-radius: 25px;
	    position: relative;
	    background: linear-gradient(0deg, #000, #272727);
    }

    #img:before, #img:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        border-radius: 20px;
        background: linear-gradient(4deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
            #0000ff, #00ff00,#ffff00, #ff0000);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation:  20s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    #img:after 
    {
        filter: blur(50px);
    } */

</style>

<x-layout>

<div style="width: 100%;">
    <table>

        <tr>
            <th  id="img">
            <img
              src='{{asset("storage/$movie->thumbnail")}}'
              class="card-img-top"
              alt="..."
              width="450px"
              height="550px"
              style="border: 5px solid purple; border-radius: 15px; margin-top: 30px;"
            />
            </th>
            <th style="padding-left: 50px;">
                <h1 style="color: white;">
                    {{$movie->name}}
                </h1>
                <p style="width: 400px; color: crimson; font-size: 16px;"><i>{{$movie->content}}</i></p>
                <a style="color: black; text-decoration: none; padding: 8px;" class="badge bg-warning" href="/">Back</a>
            </th>
            <th style="padding: 60px; padding-left: 100px; padding-bottom: 140px; ">
            <b class="badge" style="color: red; font-size:23px ; ">&#x26B2; Book Here and Buy Ticket </b> <div class="form-box">
               
                    
                <h2 style="color: white;">&#x270E; Booking Online</h2>
                <p style="padding: 50px; color: white; font-size: 24px;">
                
                    <i class="badge bg-primary mb-4" style="color: black;">&#128222; Hotlines</i> <br>
                    <b class="badge bg-danger mb-2" style="color: black;">567 234 497</b><br>
                    <b class="badge bg-danger" style="color: black;">566 453 847</b>
                    
                </p>
                </div>
                
                <div id="form" style="color: white; padding: 30px; font-size: 24px;" class="badge bg-primary mb-2">
                <b class="bg-primary" style="color: lightgray; font-size: 16px;">-{{$movie->discount}}</b>
                    <span  class="badge">{{$movie->show_date}}</span><br>
                    <span  class="badge">{{$movie->show_time}}</span>
                    <br>
                    <b class="badge bg-info mt-3 md-1" style="color: black; font-size: 16px;">Ticket Prices - {{$movie->ticket_price}}</b>
                </div>
            </th>

        </tr>
    
    </table>

    <p class="d-inline-flex gap-1 mt-2">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            Leave Comments
        </button>
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
        
        @if ($movie->comments->count())
            <x-comments :comments="$movie->comments()->latest()->paginate(2)"/>
        @endif

</div>
    
</x-layout>