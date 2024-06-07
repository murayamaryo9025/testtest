
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <title>Rase</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="{{ asset('css/shopdetail.css') }}" >
</head>


<body>
   <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo">
          Rase
        </a>
      </div>
 </header>  
   <div class="card">
      <h1 class="card_ttl">
         <input type="button" onclick="history.back(1)" value="<">
          仙人
      </h1>
    <div class="detail_img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
    </div>
      <div class="text">
        <p>#東京都#寿司</p>
        <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待までお気軽に使用することができます。</p>
     </div>
   </div>
 <div class="box">
    <div class="box-list">
       <h2>予約</h2>
       <div class="appointment-list">
          <form class="list" action="/done" method="post">
            
             <div class="appointment-group">
               <input type="date" size="15" id="date"  value="2024-05-01">
             </div>
             <div class="appointment-group2">
               <input type="time" step="1800" id="time" required />
             </div>
             <select name="select" class="txt">
                 <option value="1人">1人</option>
                 <option value="2人">2人</option>
                 <option value="3人">3人</option>
                 <option value="4人">4人</option>
                 <option value="5人">5人</option>
                 <option value="6人">6人</option>
                 <option value="7人">7人</option>
                 <option value="8人">8人</option>
             </select>
             <div class="confirm-card">
               <div class="confirm-list">
                  <table>
                     <ul>
                        <ol>aaaaaaaa</ol>
                        <ol>bbbbb</ol>
                        <ol>cccc</ol>
                     </ul>
                  </table>
               </div>
               
             </div>
             </div>
          </form>
          <div class="footer_btn" action="/done">
          <button>予約する</button> 
       </div>
    </div>
 </div>
</body>
