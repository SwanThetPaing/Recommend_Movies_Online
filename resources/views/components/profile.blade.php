@props(['user'])

<title>Profile</title>

<style>

* {
    top: 300px;
    margin: 0 auto;
    padding: 10px
}

body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    /* transition: all 0.5s */
}

.card:hover .image img {
    /* transform: scale(1.5) */
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}

</style>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

@auth 
@if(auth()->user())

<!-- <x-navbar /> -->

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
}

#menu:hover
{
  color: white;
  background-color: black;
  padding: 5px;
  width: 100px;
  border-bottom: 2px solid white;
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

#edit 
{
    text-decoration: none;
    color: white;
    background-color: black;
    border-radius: 20px;
    border: 2px solid black;
}


#edit:hover
{
    color: white;
    border: 2px solid white;
}

</Style>

<nav id="nav">

        <nav class="navbar">
      <div class="container">
      <a id="logo" href="/" class="nav-link">Movieland Cinema</a>
      
      </div>
    </nav>
</nav>



<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
     <div class="card p-4" style="padding-top: 10px; font-size: 20px;  border-radius: 50px; background-color: black;  color: white; width: 700px; height: 600px; text-align: center;" >
        <div class=" image d-flex flex-column justify-content-center align-items-center" style=""> 
           
            <div class="justify-content-center">
            <div class="" style="margin-left: 500px;">

                @auth 

                @if (auth()->user()->id == $user->id)
                <div class="d-flex mt-2 ">
                    <a href="/user/profile/{{auth()->user()->id}}/edit" id="edit" title="Edit">&#9776;</a> 
                </div>

                @endif

                @endauth  

            </div>

                <img src='{{asset("/storage/{$user->avatar}")}}' height="200" width="200" style="border-radius: 50%;"/>
            </div>
            <div>
            <h3 class="name mt-3" style="font-size: 30px;">{{$user->name}}</h3> 
            <span class="idd" style="font-size: 30px;">{{$user->email}}</span>
            </div>
        </div> 

        <div class="text mt-3"> 
           <div style="box-shadow: 4px 0px 4px 0px blue; border-radius: 10px;">
                <p  style="font-size: 30px;">{{$user->content}}.</p>
           </div>
            <div class=" px-2 rounded mt-4 date " style="background-color: black;"> 
                <span class="join" style="color: white; font-size: 20px; box-shadow: 0px 2px 2px 0px blue;">Joined since {{$user->created_at}}</span> 
            </div> 
    
        </div> 
    </div>
</div>

@endif
@endauth

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->