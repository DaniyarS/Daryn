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
	  <link rel="stylesheet" href="../css/main.css" />	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- Модальное окно  -->
      <!-- <link rel="stylesheet" href="../remodal/remodal.css"> -->
      <!-- <link rel="stylesheet" href="../remodal/remodal-default-theme.css"> -->
      <!-- Обратная связь  -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="../feedback/js/feedback.js"></script> -->
    <!-- <script src="../feedback/js/jquery.arcticmodal.js"></script> -->
    <!-- <script src="../feedback/js/jquery.jgrowl.js"></script> -->
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.modal_btn', function(){
			$('#small-modal').arcticmodal();
		});
	});
    </script>
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../feedback/css/jquery.arcticmodal.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../feedback/css/jquery.jgrowl.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	  
	 
      <meta name="viewport" content="width=device-width">	
</head>
<body>


    <header>

        <div class="container">
            <div class="row">
            	<div class="col-md-12 col-sm-12 col-xs-12 header">
            		<img src="../images/logo.jpg" alt="" class=" col-md-3 col-sm-3 col-xs-3">
            		<p class="col-md-9 col-sm-9 col-xs-12" >
            			Учебный центр, Дарын.кз
					</p>
					

                </div>
                

  

		<div id="particles" >
			<section class="intro">
			</section>
    	</div>
    	<section id="section10" class="demo">
			<a href="#menu"></a>
		</section>
    
            </div>
			
            
        </div>

    </header>
    <div id="headerback">
	
	</div>
<div id="menu">
	<div  class="container">
		<div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">

					    <ul class="nav navbar-nav">
					      <li><a href="../index.php" id="test">Главная</a></li>
					      <li><a href="../index.php" id="test1">Новости</a></li>
					      <li><a href="../index.php" id="test2">Преподаватели</a></li>
					      <li><a href="../index.php" id="test3">Отзывы студентов</a></li>
					      <li><a href="../index.php" id="test4">Как проходят занятия</a></li>
					      <li><a href="../index.php" id="test5">Мы на карте</a></li>
					      <li><a href="index.php" id="test6" style="color: skyblue !important;">Админ панель</a></li>

					      
					      
					    </ul>
						
					 </div>
				</nav>
	        </div>


	        <div  class="col-md-12 col-sm-12 col-xs-12">
			

	        </div>
	    </div>
	</div>
</div>
<div id="content"  class="container">
		<div class="row" style="display: block" >
			<a href="index.php?action=add" class="col-md-offset-2 col-md-10" style="margin-bottom: 20px;">Добавить новость</a>
			<table border="1" class=" col-md-offset-2 col-md-8" >
				
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th></th>
					<th></th>
				</tr>
				<?php foreach($articles as $a): ?>
				<tr>
					<th><?=$a['date']?></th>
					<th><?=$a['title']?></th>
					<th>
						<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
					</th>
					<th>
						<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
					</th>
				</tr>
				<?php	endforeach ?>
		
			</table>
			<h3 class="col-md-offset-2 col-md-8" style="margin-top: 40px;" >Заявки клиентов </h3>
			<table border="1" class=" col-md-offset-2 col-md-8" >

				<tr>
					<th>Имя</th>
					<th>Телефон</th>
					<th>e-mail</th>
					<th></th>
				</tr>
				<?php foreach($mailed as $a): ?>
				<tr>
					<th><?=$a['name']?></th>
					<th><?=$a['phone']?></th>
					<th><?=$a['mail']?></th>
					<th>
						<a href="index.php?action=delete&eid=<?=$a['id']?>">Удалить</a>
					</th>
				</tr>
				<?php	endforeach ?>
		
			</table>

		</div>

	</div>
	<div id="footer">
		<div class="container">
			<div class="row">
				<p class="col-md-12 col-sm-12 col-xs-12">
					© Все права защищены<br>
					Сламкул Данияр<br>
				</p>
			
			</div>
		</div>
	</div>
	
</body>
</html>