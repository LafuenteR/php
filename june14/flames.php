<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
    .container{
        text-align: center;
    }
    </style>
</head>
<body>
<div class="container">
    <h1>F.L.A.M.E.S</h1>
    <form method="POST" action="">
        <input type="text" name="name1"><br>
        <input type="text" name="name2"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php 
   
    // if(isset($_POST['submit'])) {
    //     $name1 = $_POST['name1'];
    //     $name2 = $_POST['name2'];
    //     if ($name1 == $name2){
    //         echo 'Names are the same';
    //     }
    //     $name1_arr = str_split(strtolower($name1));
    //     $name2_arr = str_split(strtolower($name2));

    //     // $count = 0;
    //     // }else
    //     // {
    //     for ($i=0; $i < count($name1_arr) ; $i++) { 
    //         for ($j=0; $j < count($name2_arr) ; $j++) { 
    //            if($name1_arr[$i] == $name2_arr[$j] ){
    //             // $name1_arr[$i] = $name2_arr[$j];
              
    //            }
    //         } 
    //         // $name1_arr = str_replace('/', "", $name1_arr);
    //         // $name2_arr = str_replace('/', "", $name2_arr);
    //         // $result = count($name1_arr) + count($name2_arr);
    //         // echo $result;
    //         }
        
    //       }

    if(isset($_POST['submit'])){
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $flames = ['Friends','Lovers','Affection','Marriage','Enemy','Soulmates'];

        $final_count = check_match($name1,$name2) + check_match($name2,$name1);
        echo "<h3>" . $name1 . "</h3>";
        echo "<h3>" . $name2 . "</h3>";
        // echo "<h2>" . $final_count . "</h2>";

        $result = $flames[$final_count%6];
        echo $result;
    }
        function check_match($name1,$name2){
            $name1_arr = str_split(strtolower($name1));
            $name2_arr = str_split(strtolower($name2));
            $count = 0;

            for ($i=0; $i < count($name1_arr) ; $i++) { 
                $has_match = 'false';
                for ($j=0; $j <count($name2_arr) ; $j++) { 
                    if($name1_arr[$i] == $name2_arr[$j]){
                        $has_match = 'true';
                    }
                }
                if($has_match == 'false'){
                    $count++;
                }
            }
            return $count;
        }
       
    ?>

    <?php
//    $var1 = "pradeep"; // string1
//     $var2 = "neelam"; // string2

//     $arr1 = str_split($var1);
//     $arr2 = str_split($var2);

// /* compairing each elemnt on string1 with string2 */
//      for ($i = 0; $i < strlen($var1); $i++) {
//                 for ($j = 0; $j < strlen($var2); $j++)
//                     if ($arr1[$i] == $arr2[$j]) {
//                         unset($arr1[$i]);
//                         unset($arr2[$j]);              
//                         break;

//                     }
//             }

//            $result = array_merge($arr1, $arr2);
//          echo count( $result);
//          $flame = "flames"; 

// /* Flames Main Logic */ 
//      for ($i = strlen($flame); $i > 1; $i--) {
//                 $diff = $result % strlen($flame);
//                 if ($diff == 0) {
//                     $diff = strlen($flame) - 1;
//                 } else {
//                     $diff--;
//                 }
//                 $flame[$diff] = "@";
//                 list($f1, $f2) = preg_split("/@/", $flame);
//                 $flame = $f2 . $f1;
//             }
//             switch ($flame) {
//                 case f:
//                     echo "You are now Friends";
//                     break;
//                 case l:
//                     echo "You are now Lovers";
//                     break;
//                 case a:
//                     echo "You are now Ancestors";
//                     break;
//                 case m:
//                     echo "You are now Married";
//                     break;
//                 case e:
//                     echo "You are now Enemy";
//                     break;
//                 case s:
//                     echo "You are now Sister";
//                     break;
//             }


    ?>
</div>
</body>
</html>