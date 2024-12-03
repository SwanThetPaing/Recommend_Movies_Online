@props(['movie'])
 
<x-card-wrapper style="background-color: black;">
<form action="/movies/{{$movie->slug}}/comments" method="post" class="col-md-2 md:col-md-6" style="width: 500px; height: 100px;">
              @csrf
              <div class="mb-3">
             
              <textarea required class="form-control border border-0" style="width: 334px; height: 100px;" name="body" id="" cols="10" rows="5" placeholder="Comment Here"></textarea>
            <x-error name="body"/>
            </div>
          <div class="d-flex" style="">
          <button type="submit" class="btn btn-primary" >Send</button>
          </div>
</form>
</x-card-wrapper>