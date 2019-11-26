@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
                文章分類
            </div>
            <hr class="style-three">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 margin-bottom-20">
                        <div class="fat-heading-abb">
                            <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">
                                <i class="fa fa-folder"></i> {{ $category->name }}
                                <span class="cat-count">({{ $category->articles_count }})</span>
                            </a>
                        </div>
                        <div class="fat-content-small padding-left-30">
                            <ul>
                                @foreach($category->articles as $article)
                                    @if($loop->index >= 5)
                                        @break
                                    @endif
                                    <li>
                                        <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                            <i class="fa fa-file-text-o"></i> {{ $article->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{ $categories->links('partials.pagination') }}
    </div>
</div>
@endsection

@section('about')
<div class="container-fluid featured-area-grey padding-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fb-heading">
                    關於我們
                </div>
                <div class="fb-content">
                    <p>
                        提供了一個易於自訂和使用的知識庫 —— 既可以用作內部知識庫，又可以用作 IT 知識庫、僅限代理的知識庫或面向客戶的常見問題資源。而且因為它隨時可用，客戶和代理都可以透過自助服務及時獲得正確的資訊。
                    </p>
                    <p>
                        打造一個網路式知識庫，無需擔心過多細節。建立組織中所需相關的知識，以有系統性的分類及標籤，打造一個功能完整的知識庫，讓企業的經驗傳承下去。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection