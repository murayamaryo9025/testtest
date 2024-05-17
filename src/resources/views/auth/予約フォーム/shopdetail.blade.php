<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <title>Rase</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Rase</h1>
<div class="card">
   <div class="card_img">
   <img src="https://www.google.com/url?q=https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg&sa=D&source=editors&ust=1715611155023364&usg=AOvVaw12ldTqCl06ovBc0egvApbC" >
</div>
</div>
   <section class="picture">
     <h2>仙人</h2>
     <p>#東京都#寿司</p>
     <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待までお気軽に使用することができます。</p>
   </section>
<div class="container">
   <div class="box">
      <form action="" method="POST">
        <div>
           <label for="date">日付</label>
           <input type="date"  value="2024-05-01">
        </div>
        <div>
			  <label for="time">時間</label>
			  <input type="time" id="time" name="time" min="12:30" step="30" required />
		  </div>
		  <div>
			  <label for="number">人数</label>
			  <input type="number" name="number" step="1">
		  </div>
		  <input type="submit" value="送信する">
      </form>
   </div>
</div>