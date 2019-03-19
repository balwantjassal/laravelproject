<h1>Your Posts</h1>
<ul>
@foreach($posts as $post)
    <li>
        <h4>{{ $post->subject }}</h4>
        <p>{{ $post->message }} </p>
    </li>
@endforeach
</ul>
