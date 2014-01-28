<?php 

        if(isset($_COOKIE['voted']))
                echo "You have already voted. <br/>";
        else
                echo "Results<br/>";

        //        get the results from the file and display them
        $file = file_get_contents('metrics.txt');


        $array = explode(";", $file);
        $count = count($array);
        //        Output a line of the file until the end is reached

        echo $array[0] .": ";
        echo $array[1] ."<br/>";

        for($i = 2; $i < $count; $i += 3)
        {
                // question
                echo $array[$i] ."<br/>";
                // responses
                echo $array[$i + 1] ."<br/>";
                // quantity
                echo $array[$i + 2] ."<br/>";
        }
?>