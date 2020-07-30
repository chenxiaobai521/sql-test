<?php
	ob_start();
	$id = $_REQUEST['id'];
	$fileName="$id.html";


	$arr=[
		["id"=>1,"goods_name"=>"二哈","age"=>10],
		["id"=>2,"goods_name"=>"金毛","age"=>10],
		["id"=>3,"goods_name"=>"藏獒","age"=>10],
	];
?>
<table border="1px">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>age</td>
		</tr>

		<?php foreach($arr as $key=>$val){ ?>
			<tr>
				<td><?php echo $val['id']?></td>
				<td><?php echo $val['goods_name']?></td>
				<td><?php echo $val['age']?></td>
			</tr>
		<?php } ?>
</table>

<?php
	$content = ob_get_contents();
	file_put_contents($fileName, $content);
?>
