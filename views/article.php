



<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	  <meta charset="utf-8" />
	  <title>Учебный центр, Дарын.кз</title>	
	  <link rel="stylesheet" href="css/main.css" />	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.modal_btn', function(){
			$('#small-modal').arcticmodal();
		});
	});
    </script>


	  
	 
      <meta name="viewport" content="width=device-width">	
</head>
<body>




<div id="content"  class="container" style="padding-top: 20px; height: 100% !important; margin-bottom: 0px !important;" >
		<div class="row" style="display: block" >
			<h3 class="col-md-12">Ваша статья </h3>
			<div class="myNews col-offset-2 col-md-8 col-sm-12 col-xs-12 ">
				<div class="article">
					<h3><?=$article[0]['title']?></h3>
					<em>Опубликовано: <?=$article[0]['date']?></em>
					<p><?=$article[0]['content']?></p>
				</div>
			</div>

		</div>

	</div>

	
</body>
</html>