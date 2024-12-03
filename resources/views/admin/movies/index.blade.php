<style>

#table 
{
  border: 1px solid white;
  width: 910px;
  height: 100%;
  background-color: white;
  border-radius: 35px;
}

#header_title 
{
  color: white;
}

#text 
{
  color: black;
  text-decoration: none;
}

#released_date
{
  color: black;
}

#edit 
{
  margin-top: 16px;
  float: left;
}


#delete 
{
  border-radius: 50%;
  float: left;
}

#polish_color
{
  color: white; 
  background-color: black;
}

</style>

<x-admin-layout>

    <h3 class="text-center text-white">Movies Informations</h3>
    <p class="text-danger">Be careful to not accidentally delete Movies</p>
    
    <x-card-wrapper id="polish_color" style="background-color: black; border: 1px solid white; width: 970px; border-radius: 20px;">

    <table id="polish_color" style="background-color: black;" id="table" class="table">
  <thead id="polish_color">
    <tr style="color: white; background-color: black;">

    <h5 class="mv-3 text-secondary">

      @if($movies->count() > 1)

      {{$movies->count()}} Movies available on this Website.

      @else 

      {{$movies->count()}} Movie available on this Website.

      @endif
        
    </h5>

      <th style="color: white;  background-color: black;" id="header_title" scope="col">Name</th>
      <th style="color: white;  background-color: black;" id="header_title" scope="col">Released_Date</th>
      <th style="color: white;  background-color: black;" id="header_title" scope="col">Show Date</th>
      <th style="color: white;  background-color: black;" id="header_title" scope="col">Show Time</th>
      <th style="color: white; background-color: black; float: left;" id="header_title" scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody id="polish_color">


  @foreach ($movies as $movie)

      <tr id="polish_color">
          <td  style="color: white; background-color: black;"><a style="color: white; background-color: black;" id="text" href="/movies/{{$movie->slug}}" target="_blank">{{$movie->name}}</a></td>
          <td style="color: white; background-color: black;" id="intro">{{$movie->released_date}}</td>
          <td style="color: white; background-color: black;" id="intro">{{$movie->show_date}}</td>
          <td style="color: white; background-color: black;" id="intro">{{$movie->show_time}}</td>
          <td style="color: white; background-color: black;" id="edit"><a href="/admin/movies/{{$movie->slug}}/edit" class="btn btn-outline-warning">&#10002;</a></td>
          <td style="color: white; background-color: black;" id="delete">
              <form action="/admin/movies/{{$movie->slug}}/delete" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" id="delete" class="btn btn-outline-danger">
                  &#10007;
                  </button>
              </form>
          </td>
      </tr>   

    @endforeach

        
  </tbody>
</table>
    {{$movies->links()}}
    </x-card-wrapper>

</x-admin-layout>