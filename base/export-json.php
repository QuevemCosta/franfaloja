<?php
    include('con.php');
    $sql = "SELECT * FROM `new_table`";
    $result = mysqli_query($con,$sql);

    while( $post_Produto = mysqli_fetch_assoc($result)){

    $json = json_encode(["produtos" => [$post_Produto]]);
    echo "<pre>";
    print_r($json);
}