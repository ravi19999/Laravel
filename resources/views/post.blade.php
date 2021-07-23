<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
    </article>
    <p>
        <a href="/categories/{{ $post->category->slug }}">{{$post -> category->name}}</a>
    </p>
    <div>
        <p>
            {!! $post->body !!}
        </p>
    </div>
    <a href="/">Go Back</a>
</x-layout>