<?php 

if(isset($data['posts'])){
	$posts = $data['posts'];
	foreach ($posts as $post ) {

		$post = json_decode($post);
		echo $post->subject;
		echo '<br>';
		echo $post->description;
		echo '<hr>';
	}
}
 ?>



<form action="/mvc/public/index.php/klub/aktivnosti/predlozi" method="POST">
	<label>Tema:</label>
	<input type="text" name="subject">
	<label>Opis: </label><input type="text" name="description">
	<input type="submit" value="Predlozi">
</form>

