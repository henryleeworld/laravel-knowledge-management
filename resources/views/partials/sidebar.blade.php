<div class="col-md-4 padding-20">
    <div class="row margin-bottom-30">
        <div class="col-md-12 ">
            <div class="support-container">
                <h2 class="support-heading">仍需要協助嗎？</h2>
                如果您找不到問題的回答，請
                <a href="#">連絡我們</a>技術支援尋求協助。
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                熱門文章
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($popularArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                最新文章
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($latestArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                熱門標籤
            </div>
            <hr class="style-three">
            <div class="fat-content-tags padding-left-10">
                @foreach ($popularTags as $tag)
                    <a href="{{ route('tags.show', [$tag->slug, $tag->id]) }}" class="btn btn-default btn-o btn-sm">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>