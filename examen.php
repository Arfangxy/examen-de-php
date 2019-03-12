
<html>
<head>
   
    
    <title>mon site</title>
    
    <style>
    table,td,tr{border:2px dashed;
    width:200px} 
    </style>
    
</head>
<body>
<center>
<table >

<th><center><img src="arfang.jpeg" width="150px" heigth="120px"></center></th>
<hr  width="100%">
<?php
 $personne=array (
        "nom"=>"sow",
        "prenom"=>"arfang",
        "age"=>"14",
        "email"=>"sowarfang98@gmail.com",
        "adresse"=>"khombole",
        "profession"=>"policier"
    );
    ?>
<?php foreach($personne as $key =>$value){
     ?>  

     <tr>
<td> <?php echo  $key ;?> </td> 
<td> <?php echo $value;?> </td>
</tr>
<?php } ?>
  
    
    
</table>
</center>
</body>
</html>