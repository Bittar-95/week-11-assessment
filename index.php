<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

echo "<table>

<tr><td>Salary For Mr.Ais</td><td>200$</td></tr>
<tr><td>Salary For Mr.B</td><td>700$</td></tr>



</table>";



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

               sort($countries);


               echo "<ul>";
               foreach($countries as $country)
               {
                   echo "<li> $country </li>";
                 
                  
               }

               echo "</ul>";

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

$counter = 1;
for ($i=1; $i <=10 ; $i++) { 
    

    
    if($i >= (10/2)+1)
    {
        
        

            for ($j=$i; $j <=10 ; $j++) { 
                echo "*";
                
            
        
            
        }
        echo "<br/>";
    
   

    
        
     
        

    }
    else{

    for ($j=1; $j <= $i; $j++) { 
        echo"*";
      
    }
    echo "<br/>";
   

}
   
}


$firstdate =  "1981-11-04";
$seconddate = "2013-09-04";

$fd = array();
$word = "";
for ($i=0; $i <strlen($firstdate); $i++) { 
    
    if($firstdate[$i]!=='-')
    {
        $word+=$firstdate[$i];
        }
        else
        {
            array_push($fd , $word);
            $word = "";

        }

    
}

echo $word[0];





echo "<form>

<input type=text />
<input type=submit />







</form>";


?>
