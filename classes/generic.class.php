<?php 
class Generic{
	 
    
	  public function fetchAll($table) {
		  $query = "SELECT * FROM ".$table;
		  $q = DB::query($query);
		   while($row=mysqli_fetch_array($q))
			 {
			 $data[]=$row;
			 }
	 	return $data;
		  
	  }
	  
	public function fetchJSON($table) {
		  $sqldata = DB::query("SELECT * FROM `$table`");
	
			$rows = array();
			while($r = mysqli_fetch_assoc($sqldata)) {
			  $rows[] = $r;
			}
	
			return json_encode($rows);
	}

	  public function secure($string) {

		// Because some servers still use magic quotes
		if ( get_magic_quotes_gpc() ) :

			if ( ! is_array($string) ) :
				$string = htmlspecialchars(stripslashes(trim($string)));
			else :
				foreach ($string as $key => $value) :
					$string[$key] = htmlspecialchars(stripslashes(trim($value)));
				endforeach;
			endif;

			return $string;

		endif;


		if ( ! is_array($string) ) :
			$string = htmlspecialchars(trim($string));
		else :
			foreach ($string as $key => $value) :
				$string[$key] = htmlspecialchars(trim($value));
			endforeach;
		endif;

		return $string;

	}

	public static function stripTags($input){
        if(gettype($input) == "string"){
            //	$pattern = '/<[\s\n\r]*(script|iframe)[\s\n\r]*>/i';
            //	$input = preg_replace($pattern,"", $input);
            $input = strip_tags($input);
        }
        return $input;
    }
    public static function stripNonAsciiCharacters($input){
        if(gettype($input) == "string"){
            setlocale(LC_CTYPE, 'en_US.UTF-8');
            $input = iconv('UTF-8', "ASCII//IGNORE", $input);
        }
        return $input;
    }
}

?>