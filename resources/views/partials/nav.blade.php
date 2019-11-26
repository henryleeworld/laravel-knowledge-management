<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> 首頁
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}">
                        <i class="fa fa-file-text-o"></i> 文章
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class="fa fa-lightbulb-o"></i> 常見問題
                    </a>
                </li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
        </div>
    </div>
</div>