<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/sample.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <title>太子堂保育園</title>
</head>
<body>
<header class="header1">
    <div class="header">
        <div class="header-title">
                <span style="color: rgb(255 150 152 / 64%)">太</span>
                <span style="color: #fff271">子</span>
                <span style="color: #bae9eb">堂</span>
                <span style="color: rgb(255 150 152 / 64%)">保</span>
                <span style="color: #bae9eb">育</span>
                <span style="color: #fff271">園</span>
            </div>
            <a href="" class="saiyou">◂採用情報</a>
        <div class="header-list">
            <ul class="header-list01">
                <a href=""><li><img src="/images/icons8-ばら-40.png" alt="">保育園紹介</li></a>
                <a href=""><li><img src="/images/icons8-ナッツ-40.png" alt="">保育園の一日</li></a>
                <a href=""><li><img src="/images/icons8-チェリー-40.png" alt="">年間行事</li></a>
                <a href="{{ route('contact.create') }}"><li><img src="/images/icons8-オークリーフ-40.png" alt="">見学予約フォーム</li></a>
            </ul>
        </div>
    </div>
</header>

<section>
    <div class="containter">
        <img src="/images/kumo01.png" class="kumo01">
        <img src="/images/kumo01.png" class="kumo02">
        <img src="/images/tori.png" class="tori">
        <div class="swiper">
            <!-- Slides -->
            <img src="/images/top01.jpg" alt="" id="slide_img">
        </div>
    </div>
    <div>
        <h1 class="section-title">保育園の紹介</h1>
    </div>      
    <div class="main-title">
        <div class="title01">
            <img src="/images/title01.jpg" alt="" class="title01-phot">
            <div class="title01-list-1">
                    <h1 class="h1-1">保育目標</h1>
                <ul class="title01-list">
                        <li>
                            健康で明るいこども
                        </li>
                        <li>
                            意欲的で力いっぱい自分を表現できるこども
                        </li>
                        <li>
                            友達とあそべるこどもをそだてる
                        </li>
                    </ul>
            </div>
            <button class="title-button01">もっと見る</button>
        </div>     
        <div class="title02">
            <img src="/images/title01.jpg" alt="" class="title01-phot">
            <div class="title01-list-1">
                <h1 class="h1-2">戸外活動</h1>
                <ul class="title01-list">
                        <li>
                            地域との交流
                        </li>
                        <li>
                            お散歩コース
                        </li>
                    </ul>
            </div>
            <button class="title-button02">もっと見る</button>
        </div>     
        <div class="title03">
            <img src="/images/title01.jpg" alt="" class="title01-phot">
            <div class="title01-list-1">
                <h1 class="h1-3">特色</h1>
                <ul class="title01-list">
                        <li>
                            食育活動
                        </li>
                        <li>
                            異年齢交流
                        </li>
                        <li>
                            リトミック
                        </li>
                    </ul>
            </div>
            <button class="title-button03">もっと見る</button>
        </div>     
    </div>
</section>

<div class="fotter-title">
    <span style="color: rgb(255 150 152 / 64%)">太</span>
    <span style="color: #fff271">子</span>
    <span style="color: #bae9eb">堂</span>
    <span style="color: rgb(255 150 152 / 64%)">保</span>
    <span style="color: #bae9eb">育</span>
    <span style="color: #fff271">園</span>
</div>
<div class="list">
    <div class="fotter-list01">
        <ul>
            <li>〒157-00◇◇</li>
            <li>東京都世田谷区太子堂〇〇◇</li>
            <li>ＴＥＬ 03-000-000</li>
        </ul>
    </div>
    <div class="fotter-list02">
        <ul>
            <a href=""><li>保育園紹介</li></a>
            <a href=""><li>保育園の一日</li></a>
            <a href=""><li>年間行事</li></a>
            <a href="{{ route('contact.create') }}"><li>保育園見学</li></a>
        </ul>
    </div>
</div>
<div class="fotter"></div>
<script src="{{ asset('/js/sample.js') }}"></script>    
</body>
</html>