<!DOCTYPE html>
<html>
    <head>
        <title> Grading Based on Score</title>
    </head>
    <body>

        <p><?php echo "The score 97 is "?></p>
        
        <?php
        
        $score = 97;

        if ($score >= 90)
        {
            echo ("Grade A");
        }
        else if ($score >=80 && $score<=89)
        {
            echo ("Grade B");
        }
        else if($score >=70 && $score<=79)
        {
            echo ("Grade C");
        }
        else
        {
            echo ("Grade F");
        }

        ?>
    </body>
</html>