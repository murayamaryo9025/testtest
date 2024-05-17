<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calender</title>
    <style>
        .container{
            font-family: "メイリオ"
            margin-top: 80px;
        }
        h3{
            margin-bottom: 30px;
        }
        th{
            height: 30px;
            text-align: center;
        }
        td{
            height: 100px;
        }
        .today{
            background: aqua;  //日付が今日の場合は背景を水色に設定
        }
        th:nth-of-type(1),td:nth-of-type(1){
            color: red; //日曜日は赤
        }
        th:nth-of-type(7),td:nth-of-type(7){
            color: blue; //土曜日は青
        }
        .green{
            color: green;
        }
    </style>    
</head>
<body>
    <?php
    if(isset($_POST['name'])) {
        //名前が送信されたら以下の処理を行う
        //「予約フォーム」からの情報をそれぞれ変数に格納しておく↓
        $name=htmlspecialchars($_POST["name"],ENT_QUPTES);
        $member=htmlspecialchars($_POST["member"],ENT_QUPTES);
        $day=htmlspecialchars($_POST["day"],ENT_QUPTES);

        //DBに接続
        dsn='mysql:dbname=reservation;host=localhost;charset=utf8';
        $user='root';
        $pass='';

        try{
            $dbh = new PD0($dsn,$user,$pass);
            $dbh->query("INSERT INTO booking (ban,name,member,day" 
            VALUES (NULL,'$name',$'member',$'day'));
        }catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

        //予約された日の予約人数を取得する
        function getreservation(){
            $dsn='mysql:dbname=reservation;host=localhost;charset=utf8';
            $user='root';
            $pass='';
            $dbh = new PD0($dsn,$user,$pass);
            $ps = $dbh->query("SELECT * FROM booking");
            $reservation_member = array(); //各日付の予約人数を$reservation_memberへ入れるための配列を用意する。

            foreach($ps as $out){ //登録された予約情報をすべて$outに入れる
            //予約された全ての日付情報を文字列として$day_outへ格納
            $day_out = strtotime((string) $out['out']);
            //予約された全ての日のそれぞれの人数を文字列として$member_outへ格納
            $member_out = (string) $out['member'];
            //$day_outで取得した日付をもとにそれぞれの予約人数を$reservation_memberへ格納
            $reservation_member[date('Y-m-d', $day_out)] = $member_out;    
        }
      return $reservation_member;
    }


    $reservation_array = getreservation();
    //getreservation関数を$reservation_arrayに代入しておく

    function reservation($date,$reservation_array){
    //カレンダーの日付と予約された日付を照合する関数
    
         if(array_key_exists($date,reservation_array)){
        もし"カレンダーの日付"と"予約された日"が一致すれば以下を実行する

           reservation_member = "<br/>"."<span class='green'>".$reservation_array[$date]."人".</span>;

           return $reservation_member;
         } 
    }
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

//前月・次月リンクが選択された場合は、GETパラメーターから年月を取得
if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
}else{
    //今月の年月を表示
    $ym = date('Y-m');
}

//タイムスタンプ (どの時刻を基準にするか) を作成し、フォーマットをチェックする
//strtotime('Y-m-01')
$timestamp = strtotime($ym . '-01');
if($timestamp === false) {//エラー対策として形式チェックを追加
    //false返ってきた時は、現在の年月・タイムスタンプを取得
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

//今月の日付 フォーマット 例) 2020-10-2
$today = date('Y-m-j');

//前月・次月の年月を取得
//strtotime(,基準)
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

//該当月の日数を取得
$day_count = date('t', $timestamp);

//カレンダー作成の基準
$weeks = [];
$week = '';

//第一週目:空のセルを追加
//str_repeat(文字列,反復回数)
week .=str_repeat('<td></td>', $youbi);

for($day = 1; $day <= $day_count; $day++, $youbi++){

    $date =  $ym . '_' . $day; //2020-00-00

    $reservation = reservation(date("Y-m-d",strtotime($date)),$reservation_array);

    if($today == $date){
        $week .= '<td class="today">' . $day; //今日の場合はclassにtodayをつける
    }elself(reservation(date("Y-m-d",strtotime($date)),$reservation_array)){
        $week .= '<td>' . $day . '<br>' . $reservation;
    }else{
      $week .= '<td>' . $day;
    }
      $week .= '</td>';
    if($youbi % 7 === 6 || $day == $day_count){//週終わり、月終わりの場合
    //土曜日を取得

    if($day == $day_count){//月の最終日、空セルを追加
        $week .= str_repeat('<td></td>', 6 -($youbi % 7));
     }

     $weeks[] = '<tr>' . $week . '</tr>'; //weeks配列にtrと$weekを追加
     $week = '';//weekをリセット
    
    }
}

?>
<div class="container">
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
    <table class="table table-bordered">
        <tr>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
        </tr>
        <?php
        foreach($weeks as $week){
            echo $week;
        }
        ?>
    </table>
</div>
</body>
</html>