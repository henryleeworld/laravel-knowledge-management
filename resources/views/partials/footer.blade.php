
<div class="container-fluid footer marg30">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">運作方式</div>
                <div class="footer-body">
                    <p>儲存各種有意義的顯性知識內容的集合處，並且經過有系統的整理與分類。儲存的型態可以很多元，包含檔案、資料庫、圖片、影音檔…均可以是儲存在知識庫中的內容。</p>
                    <p>過往整理得井然有序的檔案櫃可視為知識庫，加快知識和資訊的流動，有利於知識共享與交流，更有利於實現組織的協作與溝通。</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">分類</div>
                <div class="footer-body">
                    <ul>
                        @foreach($footerCategories as $category)
                            <li>
                                <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">熱門文章</div>
                <div class="footer-body">
                    <ul>
                        @foreach($popularArticles as $article)
                            <li>
                                <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">{{ $article->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- COPYRIGHT INFO -->
<div class="container-fluid footer-copyright marg30">
    <div class="container">
        <div class="pull-left">
            Copyright © 2019 李亨利</a>
        </div>
        <div class="pull-right">
            <i class="fa fa-facebook"></i> &nbsp;
            <i class="fa fa-twitter"></i> &nbsp;
            <i class="fa fa-linkedin"></i>
        </div>
    </div>
</div>
<!-- END COPYRIGHT INFO -->