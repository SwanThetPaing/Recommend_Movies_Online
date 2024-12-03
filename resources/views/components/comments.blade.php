@props(['comments'])

<section class="container" style="width: 400px; height: 400px; margin-bottom: 300px; margin-top: 100px;">

    <div class="" style="width: 200px; height: 400px; padding-right:50px;">
        <h5 class="mv-3 text-secondary">Comments ({{$comments->count()}})</h5>
        @foreach($comments as $comment)
            <x-single-comment :comment="$comment"/>
           
        @endforeach
       
        {{$comments->links()}}

    </div>

</section>