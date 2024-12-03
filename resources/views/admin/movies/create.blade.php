<x-admin-layout>

    <h3 class="my-3 text-center text-white"><b style="color: blue;">Mov</b><b style="color: yellow;">ies </b><b style="color: white;">Cre</b><b style="color: red;">ate </b><b style="color: purple;">Fo</b><b style="color: green;">rm</b></h3>
        <x-card-wrapper style="width: 434px; height: 1400px; margin: 0 auto; background-color: black;">
            <form enctype="multipart/form-data" action="/admin/movies/store" method="post" style="width: 400px; height: 600px;">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="rating"/>
            <x-form.input name="released_date"/>
            <x-form.input name="slug"/>
            <x-form.input name="show_date"/>
            <x-form.input name="show_time"/>
            <x-form.input name="discount"/>
            <x-form.input name="ticket_price"/>
            <x-form.textarea name="content"/>
            <x-form.input name="thumbnail" type="file"/>

            <x-form.input-wrapper>

            <x-form.label name="category"/>
                    <select name="category_id" id="category" style="color: white; background-color: black;" class="form-control">

                    @foreach ($categories as $category)

                        <option {{$category->id==old('category_id') ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach    

                    </select>
                    <x-error name="category_id" />
                
            </x-form.input-wrapper>

            <div class="d-flex justify-content-start mt-3">
                <button type="submit" class="btn btn-success form-control">Create</button>
            </div>

            </form>
        </x-card-wrapper>

</x-admin-layout>