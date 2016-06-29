@extends('app')

@section('content')
@foreach($articles as $article)
<article class="format-image group">
    
    <!--  三种带参数的链接
    <h3><a href="/article/{{ $article->id }}">{{ $article->title }}(第一种)</a></h3>
    <h3><a href="{{ action('ArticleController@show',[$article->id]) }}">{{$article->title}}(第二种)</a></h3>
    <h3><a href="{{ url('article',$article->id) }}">{{ $article->title }}(第三种)</a></h3>
    <h5>{{$article->intro}}</h5>
    <hr>-->

    <h2 class="post-title pad">
        <a href="/article/{{ $article->id }}"> {{ $article->title }}</a>
    </h2>
    <div class="post-inner">
        <div class="post-deco">
            <div class="hex hex-small">
                <div class="hex-inner"><i class="fa"></i></div>
                <div class="corner-1"></div>
                <div class="corner-2"></div>
            </div>
        </div>
        <div class="post-content pad">
            <div class="entry custome">
                {{ $article->intro }}
            </div>
	    <div class="entry custome" style="text-align:right;font-size:14px;color:#C0C0C0;">
		{{ $article->published_at }}
	    </div>
            <a class="more-link-custom" href="/article/{{ $article->id }}"><span><i>更多</i></span></a>
        </div>
    </div>
</article>
@endforeach
@endsection