<html>
<body>

<?php
	echo "Hello_World!!";
	$sname = "Kailee";
	$sports = array("Swimming","Running");

?>
<hr>
<?="My name is Saranatai " . $sname?>

<form action="../action/post.php" method="POST">
	<select name="sl_sport">
		<option>- Select -</option>
		<option value="1">Football</option>
		<option value="2">Tennis</option>
		<?php
			foreach ($sports as $sports){
		?>
			<option value="<?=$Key+3?>"><?=$sports?></option>
		<?php } ?>
	</select>
	<button type="supmit">SEND</button>
</form>

<label id="lb_post"></label>

</body>
</html>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
	$(function(){
		$("select").change(function(){
			sp_val = $(this).val();
			$("#lb_post").load("../action/post.php?getSport=" + sp_val);
		});

	});
</script>