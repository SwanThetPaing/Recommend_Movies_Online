@props(['user'])

<Style>

#nav
{
  max-width: 100%;
  height: 60px;   
}

#logo 
{
    color: yellow;
    box-shadow: 3px 0px 0px 0px lightgreen;
    font-family: Luxuary;
    font-size: 25px;
    padding: 10px;
    text-decoration: none;
}

.nav-link
{
    height: 70px;
}

#nav_text
{
    height: 70px;
    font-size: 25px;
    font-family: Luxuary;
    padding: 13px;
    text-decoration: none;
    color: white;
}


#nav_text:hover
{
    font-size: 25px;
    padding: 13px;
    text-decoration: none;
    color: white;
    border-bottom: 3px solid white;
}

#movie_nav
{
    height: 70px;
    font-size: 25px;
    font-family: Luxuary;
    margin-right: 550px;
    padding: 13px;
    text-decoration: none;
    color: white;
    float: left;
}


#menu 
{
  color: white;
  background-color: black;
  font-size: 20px;
  padding: 5px;
  width: 100px;
  float: right;
}

#menu:hover
{
  color: white;
  background-color: black;
  padding: 5px;
  width: 100px;
  border-bottom: 2px solid white;
  float: right;
}

#titlename
{
  color: limegreen;
  background-color: light;
}

#options 
{
  color: white;
  padding-top: 10px;
  padding-left: 20px;
  margin-left: 50px;
  font-size: 25px;
  border-left: 3px solid white;
}

#options:hover
{
  color: white;
  margin-left: 50px;
  font-size: 25px;
  border-left: 3px solid blue;
}

#menulabels
{
  color: white;
  padding: 25px;
  font-size: 25px;
}

#close_menu 
{
  background-color: white;
  margin-right: 20px;
}

#profile 
{
  padding-left: 30px;
}

#option_profile
{
  color: white;
  text-decoration: none;
}

#option_profile:hover
{
  color: white;
  border-bottom: 1px solid white; 
  text-decoration: none;
}

#hr 
{
  color: white;
}

#username 
{
    padding: 10px;
    color: orange;
    margin-top: 39px;
}

#search_bar
{
  margin-right: 300px;
}

</Style>

<nav id="nav">

        <nav class="navbar">
      <div class="container">
      <a id="logo" href="/" class="nav-link">Movieland Cinema</a>
      <x-menu/>
      </div>
    </nav>
</nav>

