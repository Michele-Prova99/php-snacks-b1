<?php

$matches = [

  [
    'squadraCasa' => 'Genzano',
    'squadraOspite' => 'Albano',

    'puntiCasa' => '55',
    'puntiOspite' => '60'
  ],

  [
    'squadraCasa' => 'Ariccia',
    'squadraOspite' => 'Roma',

    'puntiCasa' => '31',
    'puntiOspite' => '27'
  ],

  [
    'squadraCasa' => 'Velletri',
    'squadraOspite' => 'Lanuvio',

    'puntiCasa' => '67',
    'puntiOspite' => '58'
  ]

];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Snack1</title>
   </head>
   <body>

     <ul>

       <?php for ($i = 0; $i < count($matches); $i++) { ?>

       <li>

          <p><?php echo $matches[$i]['squadraCasa']; ?> - <?php echo $matches[$i]['squadraOspite']; ?> | <?php echo $matches[$i]['puntiCasa']; ?> - <?php echo $matches[$i]['puntiOspite']; ?></p>
          
       </li>

       <?php } ?>

     </ul>

   </body>
 </html>
