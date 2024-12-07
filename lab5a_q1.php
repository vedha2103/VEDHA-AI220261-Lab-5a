<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
    $name = "Vedhanahyakee A/P Annadurai"; 
    $matricNum = "AI220261";
    $course = "Bachelor of Computer Science (Web Technology) with Honours";
    $yearOfStudy = "Year 3";
    $address = "41, Jalan Pegaga 1, Taman Merdeka, 75350 Batu Berendam, Melaka";
    ?> 
    
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr> 
            <td>Matric Number</td> <td><?php echo "$matricNum"; ?></td>  
        </tr> 
        <tr> 
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>  
        </tr> 
        <tr> 
            <td>Year of Study</td> 
            <td><?php echo "$yearOfStudy"; ?></td>  
        </tr> 
        <tr> 
            <td>Address</td> 
            <td><?php echo "$address"; ?></td>  
        </tr> 
    </table> 
</body> 
</html> 
