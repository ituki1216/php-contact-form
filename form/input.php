<?php

$pageFlag = 0;


if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
}

if(!empty($_POST['btn_confirm'])){
    $pageFlag = 2;
}

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>


<?php if($pageFlag === 1 ): ?>
<form action="POST" method="input.php">

氏名
<?php echo $_POST['your_name']; ?>
<br>
メールアドレス
<?php echo $_POST['email']; ?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
</form>

<?php endif; ?>

<?php if($pageFlag === 2 ): ?>
送信が完了しました
<?php endif; ?>

<?php if($pageFlag === 0 ): ?>

<form action="POST" method="input.php">
指名
<input type="text" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php echo $_POST['email']; ?>">
<br>

<input type="submit" value="確認する" name="btn_confirm">

</form>

<?php endif; ?>

<?php if($pageFlag === 2 ): ?>
完了画面
<?php endif; ?>



<?php if($pageFlag === 0 ): ?>

<form action="POST" method="input.php">指名
<br>
メールアドレス
<br>
<input type="submit" value="確認する" name="btn_confirm">

</form>
<?php endif; ?>

</body>

</html>