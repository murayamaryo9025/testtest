@section('css')
<link rel="stylesheet" href="{{ asset('css/menu2.css') }}">
@endsection

@section('content')
<body>
    <header class="header">
        <h1 class="header-ttl">
            <a href="">Rase</a>
        </h1>
        <div class="header-nav">
            <select name="area" id="area-select">
                <option value="">--all area--</option>
                <option value="東京都">東京都</option>
                <option value="大阪府">大阪府</option>
                <option value="福岡県">福岡県</option>
            </select>
            <select name="genre" id="genre-select">
                <option value="">--all genre--</option>
                <option value="寿司">寿司</option>
                <option value="焼肉">焼肉</option> 
                <option value="居酒屋">居酒屋</option>
                <option value="イタリアン">イタリアン</option>
                <option value="ラーメン">ラーメン</option>
            </select>
            <form action="search.html">
                <div class="search_box">
                    <input type="text" placeholder="Search..." />
                </div>
            </form>
        </div>
    </header>
</body>



 <div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""/>
    </div>
    <div class="card_content">
        <h1 class="card_content-ttl">
            仙人
        </h1>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#寿司</p>
            <input type="button" value="詳しく見る">
        </div>
  </div>
  <div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""/>
    </div>
            <h2 class="card_content-ttl">
               牛助
            </h2>
        <div class="card_content-tag">
            <p class="card-content-tag-item">
                #大阪府#焼肉
            </p>
            <input type="button" value="詳しく見る">   
        </div>
   </div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h3 class="card_content-ttl">
            戦慄
        </h3>
        <div class="card_content-tag">
            <p class="card-content-tag-item">
                #福岡県#居酒屋
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h4 class="card_content-ttl">
            ルーク
        </h4>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#イタリアン   
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h5 class="card_content-ttl">
            志摩屋
        </h5>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#福岡県#ラーメン
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""/>
    </div>
    <div class="card_content">
        <h6 class="card_content-ttl">
            香
        </h6>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#焼肉  
            </p>
            <input type="button" value="詳しく見る">
        </div>
    </div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h7 class="card_content-ttl">
            JJ
        </h7>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#イタリアン  
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h8 class="card_content-ttl">
            らーめん極み
        </h8>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#ラーメン
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h9 class="card_content-ttl">
            鳥雨
        </h9>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#居酒屋  
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h10 class="card_content-ttl">
            築地色相
        </h10>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#寿司
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h11 class="card_content-ttl">
            晴海
        </h11>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#焼肉   
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""/>
    </div>
        <div class="card_content">
          <h12 class="card_content-ttl">
              三子
          </h12>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#福岡県#焼肉
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h13 class="card_content-ttl">
            八戒
        </h13>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#居酒屋 
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h14 class="card_content-ttl">
            福助
        </h14>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#寿司
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""/>
    </div>
        <div class="card_content">
        <h15 class="card_content-ttl">
            ラー北
        </h15>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#ラーメン
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""/>
    </div>
        <div class="card_content">
         <h16 class="card_content-ttl">
             翔
         </h16>
         <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#居酒屋
            </p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""/>
    </div>
        <div class="card_content-ttl">
          <h17 class="card_content-ttl">
             経緯
          </h17>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#寿司</p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""/>
    </div>
       <div class="card_content-ttl">
        <div class="card_content-ttl">
          <h18 class="card_content-ttl">
             漆
          </h18>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#東京都#焼肉</p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""/>
    </div>
        <div class="card_content-ttl">
          <h19 class="card_content-ttl">
             THE TOOL
          </h19>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#福岡県#イタリアン</p>
            <input type="button" value="詳しく見る">
        </div>
</div>
<div class="card">
    <div class="card_img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""/>
    </div>
        <div class="card_content-ttl">
          <h20 class="card_content-ttl">
             木船
          </h20>
        <div class="card_content-tag">
            <p class="card-content-tag-item">#大阪府#寿司</p>
            <input type="button" value="詳しく見る">
        </div>
    </div>
