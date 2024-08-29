<?php

    include 'function.php';

    $user = new shop();

     if (isset($_GET['action']) && $_GET['action']=='delete')
    {
        $id = (int)$_GET['id'];
        if ($user->remove($id)) 
        {
            echo "<script> alert('Remove successfully');
                        window.location.href = 'cart.php';
                   </script>";
                exit();
        }
    }
?>