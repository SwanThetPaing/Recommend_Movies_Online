<x-layout>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h3 class="text-primary text-center">Registry Form</h3>
        <div class="card p-4 my-3 shadow-sm"style="background-color: black; color: white; border: 2px solid white; border-radius: 30px;">
        <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input required type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <x-error name="name" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input required type="text" name="username" value="{{old('username')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <x-error name="username" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <x-error name="email" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
                <x-error name="password" />
            </div>
            <button type="submit" class="btn btn-primary">Register</button>

            <a href="/login"> <p class="mt-3">Already have an account?</p></a>

            <!-- <ul>
                @foreach($errors->all() as $error)
                
                    <li>{{$error}}</li>

                @endforeach
            </ul> -->
        </form>
        </div>

        </div>
    </div>
</div>

</x-layout>