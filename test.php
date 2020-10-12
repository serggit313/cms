<?php

echo '<pre>';
print_r($_FILES);
echo '</pre>';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_FILES['file']['error'] == 0)
    {
        if($_FILES['file']['type'] == 'image/png' || $_FILES['file']['type'] == 'image/jpg')
        {
            $file_temp = $_FILES['file']['tmp_name'];
            $filePath = pathinfo($_FILES['file']['name']);

            if(move_uploaded_file($file_temp, 'uploads/'. mktime() . '.' .$filePath['extension']))
            {
                echo 'ok';
            }
        }

    }
}
