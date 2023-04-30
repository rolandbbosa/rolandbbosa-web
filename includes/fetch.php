
    <?php

        //get the last record from the database using timestamp
        $sql = $db->query("SELECT * FROM content ORDER BY post_no DESC");
        $result = (($sql));
        $row = [];
        if ($result->num_rows > 0)
        {
            // fetch all data from db into array
            $row = $result->fetch_all(MYSQLI_ASSOC);
        }
    ?>
    <?php
        if(!empty($row))
            foreach($row as $rows)
        {
    ?> 


    
    <a href="<?php echo $rows['names']; ?>">
        <object data="<?php echo $rows['names']; ?>"></object> 
    </a>


    <?php } ?>
    <?php
        mysqli_close($db);
    ?>
