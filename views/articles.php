<div class="myNews col-md-12 col-sm-12 col-xs-12 ">
	<?php  foreach ($articles as $a):  ?>
	<div class="article col-md-12">
		<h3>
			<a href="article.php?id=<?=$a['id']?>">
				<?=$a['title']?>
			</a>
		</h3>
		<em style="font-size: 14px">Опубликовано: <?=$a['date']?></em>
		<p style="font-size: 16px;"><?=$a['content']?></p>
	</div>
	<?php endforeach ?>
</div>