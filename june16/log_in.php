    <?php 
	function get_title(){
		echo "Log In Page";
	}

	               $string = file_get_contents('users.json');
        	       $users = json_decode($string, true);
        	       if(isset($_POST['submit_log'])){
        			foreach ($users as $user) {
        				if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
        					header('location:logout.php');
                            // log_out();
                                              
                                                // return true;
        				} 
            //                             else {
        				// 	echo "Wrong";
        				// }
        		      
        			}
        		}



        // require_once('home.php');
 ?>