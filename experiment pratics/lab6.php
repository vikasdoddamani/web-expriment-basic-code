<html>
    <body>
        <?php
        $b=file_get_contents("count.txt");
        if($b==1)
        {
            echo "Page has visited first time";
        }
        else
        {
            echo "Page has visited ".$b." Times";
        }
        $b++;
        file_put_contents("count.txt",$b);
        ?>
    </body>
</html>
