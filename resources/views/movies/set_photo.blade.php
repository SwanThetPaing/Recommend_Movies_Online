<x-layout>

    <h3 class="my-3 text-center" style="color: yellow;">Movies Edit Form</h3>
        <x-card-wrapper style="width: 434px; height: 1200px; margin: 0 auto; background-color: black;">
            <form enctype="multipart/form-data" action="/admin/movies/{{$movie->slug}}/update" method="post" style="width: 400px; height: 600px;">
            @csrf
            @method('patch')

            <x-form.input name="name" value="{{$movie->name}}" />
            <x-form.input name="rating" value="{{$movie->rating}}" />
            <x-form.input name="released_date" value="{{$movie->released_date}}" />
            <x-form.input name="slug" value="{{$movie->slug}}" />
            <x-form.input name="show_date" value="{{$movie->show_date}}" />
            <x-form.input name="show_time" value="{{$movie->show_time}}" />
            <x-form.input name="discount" value="{{$movie->discount}}" />
            <x-form.input name="ticket_price" value="{{$movie->ticket_price}}" />
            <x-form.textarea name="content" value="{{$movie->content}}" />
            <x-form.input name="thumbnail" type="file" value="{{$movie->thumbnail}}" />
            <img src='{{asset("/storage/$movie->thumbnail")}}' width="100px" height="100px" alt="" srcset="">

            <x-form.input-wrapper>

            <x-form.label name="category"/>
                    <select name="category_id" style="color: white; background-color: black;" id="category" class="form-control">

                    @foreach ($categories as $category)

                        <option {{$category->id==old('category_id', $movie->category->id) ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach    

                    </select>
                    <x-error name="category_id" />
                
            </x-form.input-wrapper>

            <div class="d-flex justify-content-start mt-3">
                <button type="submit" class="btn btn-warning form-control">Make Changes</button>
            </div>

            </form>
        </x-card-wrapper>

</x-layout>