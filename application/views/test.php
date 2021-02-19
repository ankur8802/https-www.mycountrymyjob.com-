<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?= base_url('Users/filter')?>" method="post">
		<input type="checkbox" name="city[]" value="Faridabad">Faridabad
<input type="checkbox" name="city[]" value="delhi">delhi
<input type="checkbox" name="city[]" value="faizabad">faizabad
<input type="checkbox" name="city[]" value="noida">noida

<input type="submit" name="">

	</form>


</body>
</html>