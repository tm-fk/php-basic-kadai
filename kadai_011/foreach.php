<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>

<body>
  <P>
    <?php
    $user_names =[
      'name' => '名前:玉ねぎ',
      'palace' => '値段:200',
      'from'  =>'産地:北海道'
    ];
    

    foreach($user_names as $value){
      
      echo $value . '<br>';
    }
    
    ?>
  </p>
  </body>
  
  </html>