@props(['user'])


<button id="menu" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Menu</button>

<div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

  <p style="color: white; padding-left: 25px; padding-top: 10px;">Version - 1.0</p>

  @auth 

    @if (!auth()->user()->is_admin)
      <div id="profile">

        <table>
            <tr>

            <th><a href="/components/{{auth()->user()->id}}/profile" class="badge bg-primary p-2" style="text-decoration: none; font-size: 17px;">View Profile</a></th>
              
              <th>

              <div class="offcanvas-body">

          

              </th>
              
            </tr>
        </table>
      
      </div>
    @elseif(auth()->user()->is_admin)
    <div id="profile">

        <table>
            <tr>
             
              <th><a href="/components/{{auth()->user()->id}}/profile" class="p-2" style="text-decoration: none; font-size: 17px;">View Profile</a></th>

              <th>

              <div class="offcanvas-body">

            

              </th>
              
            </tr>
        </table>
      
      </div>
    @endif

  @endauth
    

    <hr id="hr">
    
    <div class="offcanvas-header">

    <h5 class="offcanvas-title" id="menulabels">Menu</h5>
    
    <button type="button" id="close_menu" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
  </div>

    <a href="/#movies" id="options" class="nav-link">Movies</a>
    

    @auth
    
    @can('admin')
      <a href="/admin/movies" id="options" class="nav-link">Admin Control</a>
    @endcan

  
  <form action="/logout" method="POST"> @csrf
      <button type="submit" id="options" class="nav-link btn btn-link">Logout</button>
  </form>
    @else
      <a href="/register" id="options" class="nav-link">Register</a>
      <a href="/login" id="options" class="nav-link">Login</a>
    @endauth
    

  </div>
</div>