<?php 
	function articles_all(){
		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;
	}
	function mailed(){
		$query = "SELECT * FROM mailed ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;
	}
	function articles_get($id_article){

		$query = "SELECT * FROM articles WHERE id = ".$id_article;
		$result = R::getAll($query);

		return $result;	
		
	}
	function articles_new($title, $date, $content){

		$book = R::dispense('articles');
		$book->title = $title;
    	$book->date =  $date;
		$book->content = $content; 
		$id = R::store($book);


		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;

	}
	function articles_edit($id, $title, $date, $content){
		$sql = 'UPDATE articles SET title="'.$title.'", date="'.$date.'", content="'.$content.'" WHERE id='.$id;
		R::exec($sql);
		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;
	}
	function article($id){
		$query = "SELECT * FROM articles where id=".$id;
		$result = R::getAll($query);

		return $result;		
	}
	function delete($id){
		$query = "DELETE FROM articles where id=".$id;
		$result = R::getAll($query);
		
		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;		
	}
	function del($id){
		$query = "DELETE FROM mailed where id=".$id;
		$result = R::getAll($query);
		
		$query = "SELECT * FROM mailed ORDER BY id DESC";
		$result = R::getAll($query);

		return $result;		
	}
?>