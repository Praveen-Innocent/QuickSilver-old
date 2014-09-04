<?php
class User extends Generic {
	
	private $user;
	private $pass;
	private $result;
	
	/*User Search  */ 	
	 public function All() 
	 {
     	return $this->fetchAll("teachers"); 	
	 }
	
	public function Login($username,$password) {
		
		$username=mysql_real_escape_string($username);
     	$password=mysql_real_escape_string($password);
     	$md5_password=md5($password);

     	$query=mysql_query("SELECT * FROM users WHERE (username='$username' or email='$username') and password='$md5_password' AND status='1'");
     	if(mysql_num_rows($query)==1){
     		$row=mysql_fetch_array($query);
			$_SESSION['LoggedIn'] = true;
			$_SESSION['uid'] = $row['uid'];
			$_SESSION['type'] = $row['type'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
     		return $row['uid'];
     	}
     	else{
     	return false;
     	}
		
		
	}
	
	public function ForcePasswordReset($email, $pwd)
	{
		return mysql_query("update users set password='" . md5($pwd) . "' where email='$email';");

	}

	
	 public function getSchoolWithKey($key) 
    {
			$key=mysql_real_escape_string($key);
			$query=mysql_query("SELECT * FROM schools WHERE code='$key'");
			if(mysql_num_rows($query)==1)
			{
				 $row=mysql_fetch_array($query);
				 return $row;
			}
			else
			{
			return false;
			}

    }
	
	
	public function isProfileComplete()
    {	
		$uid = $_SESSION['uid'];
        $query=mysql_query("SELECT completed FROM users WHERE uid='$uid'");
     	$data=mysql_fetch_array($query);
		if($data['completed']) return true;
		else return false;
    }
	
	public function updateAllClassrooms($id,$parent_school) 
    {
			
     		$r = mysql_query("UPDATE classes SET schoolid='$id' WHERE parent_school='$parent_school'");
      		if($r) return true;
      		else return false;

    }

	 public function isLoggedIn()
    {
        if (isset($_SESSION['LoggedIn']) and isset($_SESSION['uid']) and $_SESSION['uid'] >= 1)
            return true;
        else
            return false;
    }
	
	public function IsExistsEmail($email)
	{
		$res = mysql_query("select * from users where email='" . $email . "';");
		return $res and mysql_num_rows($res) > 0;
	}
	
	
	public function Register($username,$password,$email,$name,$type) 
     {
     $username=mysql_real_escape_string($username);
     $email=mysql_real_escape_string($email);
     $password=mysql_real_escape_string($password);
     $md5_password=md5($password);
	 $profile_pic = "default.jpg";
	 if($type=="school")
	 $profile_pic = "school.jpg";
     $q=mysql_query("SELECT uid FROM users WHERE username='$username' or email='$email' ");
     
     if(mysql_num_rows($q)==0)
     {

     $query=mysql_query("INSERT INTO users(username,password,email,name,type,profile_pic)VALUES('$username','$md5_password','$email','$name','$type','$profile_pic')");
       
     $sql=mysql_query("SELECT uid FROM users WHERE username='$username'");
     $row=mysql_fetch_array($sql);
     $uid=$row['uid'];
     //$friend_query=mysql_query("INSERT INTO friends(friend_one,friend_two,role)VALUES('$uid','$uid','me')");

     return $uid ;
    

     }
     else
     {
     return false;
     }



     }
	
}
$user = new User();
?>