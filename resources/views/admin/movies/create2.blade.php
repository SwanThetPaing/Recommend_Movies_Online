<x-admin-layout>

    <h3 class="my-3 text-center text-white"><b style="color: blue;">Mov</b><b style="color: yellow;">ies </b><b style="color: white;">Cre</b><b style="color: red;">ate </b><b style="color: purple;">Fo</b><b style="color: green;">rm</b></h3>
        <x-card-wrapper style="width: 434px; height: 900px; margin: 0 auto; background-color: black;">
            <form enctype="multipart/form-data" action="/admin/movies/store_hotlines" method="post" style="width: 400px; height: 600px;">
            @csrf

           
            <x-form.input name="hotlines"/>

            <div class="d-flex justify-content-start mt-3">
                <button type="submit" class="btn btn-success form-control">Create</button>
            </div>

            </form>
        </x-card-wrapper>

</x-admin-layout>