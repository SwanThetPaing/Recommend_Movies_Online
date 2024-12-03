<x-layout>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h3 class="text-primary text-center">Login Form</h3>
        <div class="card p-4 my-3 shadow-sm" style="background-color: black; color: white; border: 2px solid white; border-radius: 30px;">
        <form method="POST" >
            @csrf
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input required type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <x-error name="email" />
            </div>
            <div class="mb-3">
                <label required for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <x-error name="password" />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>

            <p class="mt-3"><a href="/register">Create New One?</a></p>

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