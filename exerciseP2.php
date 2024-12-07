<!DOCTYPE html>
<html>
    <head>
        <title>Loops</title>
    </head>
    <body>
        <?php
        $students = ["Ali" => "A", "Abu" => "B", "Siti" => "C", "Ina" => "A-" ];
        
        foreach($students as $name => $grade)
        {
            echo "Student Name: $name, Grade: $grade <br>";
        }
        
        ?>
    </body>
</html>