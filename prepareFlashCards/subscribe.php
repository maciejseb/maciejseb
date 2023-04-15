<?php


if (isset($_POST['name'], $_POST['wordsToLearn'])) {
	$name = htmlspecialchars($_POST['name']);
	$wordsToLearn = htmlspecialchars($_POST['wordsToLearn']);

	// show the $name and $email
	echo "$name <br>";
	echo "$wordsToLearn <br>";
	
	$array_sentences = explode('.', $wordsToLearn);
	
	$size_of_array = count($array_sentences)-1;
	$step = 0;
	$step_second  = 0;
	while ($step_second < $size_of_array)
	{
	 $english_words_array[$step] = trim($array_sentences[$step_second]);	
	 $polish_words_array[$step]  = trim($array_sentences[$step_second +1]);
	 $step = $step +1;	
	 $step_second = $step_second +2;
	}
	
	echo "polskie <br>";
	print_r($polish_words_array);
	
	echo "angielskie <br>";
	print_r($english_words_array);
	 $step=0;
	$words_temp[] =' worlds = [];';
	while ($step < count($english_words_array))
	{
		$words_temp[] = 'worlds['.$step .'] = ["'.$polish_words_array[$step] .'","'.$english_words_array[$step].'"];';
		$step = $step +1;
	}
	print_r(count($english_words_array));
	print_r($words_temp);
	
	// split code of site by string //#wstaw
	$page = file_get_contents('wzor.html');
	print_r($page);
	
	$page_end = file_get_contents('wzor1.html');
	print_r($page_end);
	
	// create name of file
	$name_of_file = str_replace(" ","-",$name);
		
	$filename = __DIR__.DIRECTORY_SEPARATOR.'site'.DIRECTORY_SEPARATOR.$name_of_file.'.php';
	print_r($filename);
	
	$file = fopen($filename, 'w');
	fwrite($file,$page);
	//<a href = 'https://maciejseb.pl/donauki1.php'>do nauki1</a><br>
	$link_to_file = "//<a href = 'https://maciejseb.pl/".$name_of_file.".php'>".$name."</a><br>";
	fwrite($file,$link_to_file);
	fwrite($file,PHP_EOL);
	fwrite($file,PHP_EOL);
	
	
	$step = 0;
	while ($step < count($words_temp))
	{
		fwrite($file,$words_temp[$step]);
		fwrite($file,PHP_EOL);
		$step = $step +1;
	}
	fwrite($file,PHP_EOL);
	fwrite($file,PHP_EOL);
	fwrite($file,$page_end);
	
	fclose($file);
	
	
	
	
} else {
	echo 'lack of data';
}