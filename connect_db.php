<?php

    

    $conn = new PDO('mysql:host=localhost;dbname=ban_sach_online_db', 'root', '');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->query("set names utf8");

    $stmt = $conn->prepare("SELECT id, ten_sach, don_gia, gia_bia FROM bs_sach"); 

    $stmt->execute();
    //$mang = $db->query($SQL_query);

    // $statement = $db->prepare($SQL_query);
    // $statement->execute();
    //$result = $statement->fetch(PDO::FETCH_OBJ);
    //$result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($stmt as $item_sach){
        echo $item_sach->ten_sach; 
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid 1px black; 
            width:100%;
        }
        
        .ten_sach{
            border:1px solid black;
        }
        td{
            border:1px solid black;
            vertical-align: top;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sách</th>
                    <th>Đơn Gía</th>
                    <th>Gía Bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <?php
                        //echo '<pre>',print_r($result),'</pre>';
                        foreach($result as $id_sach){
                            ?>
                            <div class="ten_sach">
                                <?php echo $id_sach->id; ?>
                            </div>
                            <?php
                        }
                    ?>
                    </td>
                    <td>
                    <?php
                        //echo '<pre>',print_r($result),'</pre>';
                        foreach($result as $item_sach){
                            ?>
                            <div class="ten_sach">
                                <?php echo $item_sach->ten_sach; ?>
                            </div>
                            <?php
                        }
                    ?>
                    </td>
                    <td>
                    <?php
                        //echo '<pre>',print_r($result),'</pre>';
                        foreach($result as $gia_sach){
                            ?>
                            <div class="ten_sach">
                                <?php echo $gia_sach->don_gia; ?>
                            </div>
                            <?php
                        }
                    ?>
                    </td>
                    <td>
                    <?php
                        //echo '<pre>',print_r($result),'</pre>';
                        foreach($result as $gia_bia_sach){
                            ?>
                            <div class="ten_sach">
                                <?php echo $gia_bia_sach->gia_bia; ?>
                            </div>
                            <?php
                        }
                    ?>
                    </td>
                    <td>
                    <?php
                        //echo '<pre>',print_r($result),'</pre>';
                        foreach($result as $value){
                            ?>
                            <div class="ten_sach">
                                <input type="checkbox" name="" id="">
                            </div>
                            <?php
                        }
                    ?>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
</body>
</html>