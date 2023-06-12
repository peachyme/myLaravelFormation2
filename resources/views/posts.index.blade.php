@if($posts->count())
    @foreach($posts as $post)
       <h3><a href="{{ route('article', ['id' => $post->id]) }}"> {{$post->id}} : {{$post->title}} </a></h3>
    @endforeach
@else
<span>No articles available</span>
@endif
