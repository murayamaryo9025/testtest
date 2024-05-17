<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rase</title>
    <link rel="stylesheet" href="{{asset('css/.css) }}">
    <link rel="stylesheet" href="{{asset('css/.css) }}">
    @yield('css')
</head>
<body>
    <?php
    echo '必要事項を入力してください。'>;
    <div class="container">"
       <form action"calender.php" method="POST">
       お名前
       <div><input type="text" name="name"</div>
       人数
       <div>
       <input type="tel" name="member"</div>
       日付
       <div>
         <input type="date" name="day"                list="daylist" min="">
        </div>
       <div>
         <input type="submit" value="予約する">
       </div>
       <div><input type="date" name="day" list="daylist" min=""><?div>
    </div>
</body>
</html>