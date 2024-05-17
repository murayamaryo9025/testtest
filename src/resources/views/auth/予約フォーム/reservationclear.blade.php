<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rase</title>
</head>
<body>
    <h1>Rase</h1>
    <?php if(isset($_POST['submit']) && count($errors) === 0); ?>
    <!--登録完了画面 -->
    <p><?=$messege?></P>
    <p>会員登録ありがとうございます</p>
</body>
</html>