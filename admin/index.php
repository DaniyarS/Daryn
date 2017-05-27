<?php 
	require_once("../db.php");
	require_once("../models/articles.php");

	if (isset($_GET['action'])){ 
		$action=$_GET['action'];
	}
	else{
		$action = "";
	}

	if($action=="add") {
		include '../views/article_admin.php';
	}
	else if ($action=="addd") {
		if(trim($_POST['title']) != '' and trim($_POST['content']) != '' and $_POST['date'] != ''){
			if($_POST['id'] == ''){
				$articles = articles_new(trim($_POST['title']),$_POST['date'],trim($_POST['content']));
				$mailed = mailed();
				include("../views/articles_admin.php");
			}else{
				$articles = articles_edit($_POST['id'],trim($_POST['title']),$_POST['date'],trim($_POST['content']));
				$mailed = mailed();
				include("../views/articles_admin.php");				
			}
		}
		else{
			echo '<script>alert("Fill the blank");</script>';
		}
	}
	else if ($action=="edit") {
		if(isset($_GET['id'])){
			include '../views/article_admin.php';
			$articles = article($_GET['id']);
			$mailed = mailed();
			echo "<script> $('input[name=title]').val('".$articles[0]['title']."');
			$('input[name=date]').val('".$articles[0]['date']."');
			$('input[name=id]').val(".$_GET['id'].");
			$('textarea[name=content]').text('".$articles[0]['content']."');</script>";
		}
		else{
			echo '<script>alert("Fill the blank");</script>';
		}
	}
	else if ($action=="delete") {
		if(isset($_GET['id'])){
			$articles = delete($_GET['id']);
			$mailed = mailed();
			include("../views/articles_admin.php");
		}
		else if(isset($_GET['eid'])){
			$articles = articles_all();
			$mailed = del($_GET['eid']);
			include("../views/articles_admin.php");
		}
		else{
			echo '<script>alert("Fill the blank");</script>';
		}
	}
	else{
		$articles = articles_all();
		$mailed = mailed();
		include("../views/articles_admin.php");
	}


?>