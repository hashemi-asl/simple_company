<section class="parallax" style="background: url('{{asset('images/parallax/'.$data->image)}}') center center no-repeat fixed ">
    <section class="slogan">
        <h1 style="font-size: {{$data->title_size.'px'}};color: {{$data->title_color}}">{{$data->title}}</h1>
        <p style="font-size: {{$data->body_size.'px'}};color: {{$data->body_color}}">
            {{$data->body}}
        </p>
    </section>
</section>
