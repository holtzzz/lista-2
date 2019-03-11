<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista-2  Mateus Holtz</title>
</head>
<body>
    
    <h1>Ex 1</h1>
    
    <?php
            echo "Ex1<br>";
            $vetor = array ();
            for ($i = 0;$i < 50;$i ++){
                $vetor[$i] = 42;
                echo "$vetor[$i]<br>";
            }
    
    ?>
    
    <h1>Ex 2</h1>
    
    <?php
            echo "Ex2<br>";
            $vetor = array ();
            for ($i = 0;$i < 50;$i ++){
                $vetor[$i] = $i;
                echo "$vetor[$i]<br>";
            }
    
    ?>
    
    <h1>Ex 3</h1>
    
    <?php
            $soma=0;
            $cont=0;
            echo "Ex3<br>";
            $vetor1 = array();
            for ($i = 0;$i < 30;$i ++){
                $vetor1[$i] = $i;
                $soma+=$i;
                $cont=$cont+1;
            }
            $r=array();
            for ($i = 1;$i < 30;$i ++){
               if($vetor1[$i]>$vetor[$i-1]){
                   $r[0]= $i;
                   $r[1]=$vetor[$i];
               }
            }        
            echo"<pre>";
            print_r($vetor1);
            echo"</pre>";

            print "MAIOR elemento: ".$r[0]."<br>";
            print "Maior índice: ".$r[1]."<br>";
            print "Soma: ".$soma."<br>";
            print "Média: ".$soma/$cont."<br>";
        
    ?>
    
    <h1>Ex 4</h1>
    
        <?php
            echo "Ex4<br>";
            $vetor = array ();
            for ($i = 0;$i < 50;$i ++){
                $vetor[$i] = ($i+1)*2;
            }

            echo"<pre>";
            print_r($vetor);
            echo"</pre>";
        ?>
    
    <h1>Ex 5</h1>
    <select>
        
        <?php

           echo "Ex5<br>";
            $vetor = array (
                0=>"Bandas",
                1=>"NX0",
                2=>"Fresno",
                3=>"Restart",
                4=>"Bob Marley",
                5=>"Anitta",
                6=>"Mc Cavalcante",
                7=>"Mc Holtz",
                8=>"Mc Lan",
                9=>"Mc Failes",
            ); 
            for ($i=0;$i<10;$i++){
                ?>
                <option>
                <?php
                    echo $vetor[$i];
                 ?>
                 </option>
            <?php
            
            } 
            ?>
                
        
        
    </select>
    
    
</body>
</html>