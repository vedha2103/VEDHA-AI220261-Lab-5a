<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <?php
        
        $books = array (

        array ("To Kill a Mokingbird","Harper Lee",1960),
        array ("Atomic Habits","James Clear",2018),
        array ("The Da Vinci Code","Dan Brown",2003)

        );
        
        echo $books[0][0].": Author: ".$books[0][1].", Year: ".$books[0][2].".<br>";
        echo $books[1][0].": Author: ".$books[1][1].", Year: ".$books[1][2].".<br>";
        echo $books[2][0].": Author: ".$books[2][1].", Year: ".$books[2][2].".<br>";

        ?>
    </body>
</html>