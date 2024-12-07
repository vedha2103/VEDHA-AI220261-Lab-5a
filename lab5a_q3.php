<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5a Q3</title>
    </head>
    <body>
        <?php

        function calculateArea ($width, $length)
        {
            $area = $width*$length;
            return $area;
        }

        ?>

        <p><strong><?php echo ("The area of a rectangle with a width of 4 and 2 is ".calculateArea(4,2)); ?></strong></p>

    </body>
</html>