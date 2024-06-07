<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rase</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu2.css') }}">
</head>

@section('content')
<body>
    <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
         <a class="header__logo">
              Rase
         </a>
      </div>
    </div>
     <div class="reservation_list">
         <div class="box">
             <h1>予約状況</h1>
         </div>
     </div>
 <div class="container">
     <form class="confirm_list" name="/" method="post">
        
      </form>
 </div>
 <div class="favorite_list">
     <div class="favorite_shop">
         <h2>お気に入り店舗</h2>
     </div>
 </div>
 <div class="favorite-shop_card">
     <div class="card_img">
         <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
     </div>
     <div class="favorite-shop_ttl">
         <p>仙人</p>
     </div>
     <div class="card_content-tag">
            <p class="card-content-tag-item">
                #大阪府#寿司
            </p>
            <a class="detail_btn"  href="./shopdetail.blade">詳しく見る</a>
     </div>
 </div>
<div class="favorite-shop_card">
     <div class="card_img">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
     </div>
     <div class="favorite-shop_ttl">
         <p>牛助</p>
     </div>
     <div class="card_content-tag">
         <p class="card-content-tag-item">
                #大阪府#焼肉
         </p>
         <a class="detail_btn">詳しく見る</a>
     </div>
</body>
</html>
</header>
@endsection