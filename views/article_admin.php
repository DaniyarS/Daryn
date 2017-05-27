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
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
					      <li><a href="#" id="test">Главная</a></li>
					      <li><a href="#" id="test1">Новости</a></li>
					      <li><a href="#" id="test2">Преподаватели</a></li>
					      <li><a href="#" id="test3">Отзывы студентов</a></li>
					      <li><a href="#" id="test4">Как проходят занятия</a></li>
					      <li><a href="#" id="test5">Мы на карте</a></li>
					      <li><a href="admin" id="test6" style="color: skyblue !important;">Админ панель</a></li>

					      
					      
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
			<a href="index.php" class="col-md-offset-2 col-md-10" style="margin-bottom: 20px;">Админ панель</a>
			<form method="post" action="index.php?action=addd" class="col-md-offset-2 col-md-8">
				<label>
					Название
					<input type="text" name="title" value="" class="form-item col-md-12" autofocus required>
				</label>
				<label>
					Дата
					<input type="date" name="date" value="" class="form-item col-md-12" required>
				</label>
				<label>
					Содержимое
					<textarea class="form-item col-md-12" required name="content" rows="10" cols="100%"></textarea>
				</label>
				<input type="number" name="id" value="" hidden>
				<input type="submit" value="Сохранить" class="btn">
			</form>

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
	
<!--PHP-->

  

<!--modal scripts -->


 

    <!-- Подключаем скрипты -->
    <script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="../js/script.js"></script> -->

  


	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	
</body>
</html>