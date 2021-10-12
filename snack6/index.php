<?php 
include __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insegnanti e PM</title>
</head>
<body>
    <div class="container">
        <?php 
            echo "<h3>Teachers</h3>";
            foreach($db['teachers'] as $key => $teacher){
    
                echo "<div class='box-type teachers'><p>{$teacher['name']} {$teacher['lastname']}</p></div>";
                
            
            }
        ?>

<?php 
            echo "<h3>PM</h3>";
            foreach($db['pm'] as $key => $pm){
    
                echo "<div class='box-type pm'><p>{$pm['name']} {$pm['lastname']}</p></div>";
                
            
            }
        ?>
    </div>
</body>
</html>