@foreach($posts as $post)
    <div>
        <h3><a href="">{{ $post->title }}</a></h3>
        <!--<p>{{-- str_limit($post->description, 400) --}}</p>-->
        <p>{{ $post->description, 400 }}</p>


        <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>


        <hr style="margin-top:5px;">
    </div>
@endforeach
