<?php
    // $inform = [
    //   ['name1'=>'Ibrohim','name2'=>'Dilshod','name3'=>'Tohir'],
    //   ['phone1'=>977547541,'phone2'=>977550209,'phone3'=>977226499]
    // ];
    // $inform = [
    //   ['Ibrohim','Dilshod','Tohir'],
    //   ['977547541',977550209,977226499]
    // ];
    // $popped = array_pop($inform);
    // print_r($popped);
    // for($i=0;$i<2;$i++){
    //   echo "<p><b>Row number $i</b></p>";
    //   echo "<ul>";
    //   for($j=0;$j<3;$j++){
    //     echo "<li>".$inform[$i][$j]."</li>";
    //   }
    //    echo "</ul>";
    // }

            #accessing each element in two demontional array
            $adrass = [
              array('name'=>'Ibrohim','location'=>'Maksim Gorkiy'),
              array('name'=>'Dilshod','location'=>'Koraqamish'),
              array('name'=>'Izzat','location'=>'Kokcha'),
              array('name'=>'Tohir','location'=>'Xondamir')
            ];
            // foreach ($adrass as $adress) {
            //   echo $adress['name']." - ".$adress['location'].'<br />';
            // }


            #accessing each element in one demontioanl array
            // $friends = array("Ibrohim","Dilshod","Tohir","Izzat");
            // $friends[4] = "Abdulaziz";
            // echo count($friends);
            // foreach ($friends as $friend) {
            //   echo "<br>".$friend;
            // }
 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2>Address</h2>
     <ul>
      <?php foreach ($adrass as $adr) { ?>
          <h4><?php echo $adr['name']; ?></h4>
          <p>Location: <?php echo $adr['location']; ?></p>
     <?php } ?>
   </ul>
   </body>
 </html>
