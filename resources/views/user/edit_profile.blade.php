@props(['user'])

<x-layout>

    <h3 class="my-3 text-center" style="color: yellow;">Profile Edit Form</h3>
        <x-card-wrapper style="width: 434px; height: 1000px; margin: 0 auto; background-color: black; ">
            <form enctype="multipart/form-data" action="/user/edit_profile/{{$user->id}}/update" method="post" style="width: 400px; height: 600px;">
            @csrf
            @method('patch')

            <img src='{{asset("/storage/$user->avatar")}}' width="300px" height="300px" style="border-radius: 50%; margin-left: 60px;" alt="" srcset="">
            <x-form.input name="avatar" type="file" value='{{asset("/storage/$user->avatar")}}' />
            <x-form.input name="name" value="{{$user->name}}" />
            <x-form.textarea name="content" value="{{$user->content}}" />

            <div class="d-flex justify-content-start mt-3">
                <button type="submit" class="btn btn-warning form-control">Make Changes</button>
            </div>

            </form>
        </x-card-wrapper>

</x-layout>