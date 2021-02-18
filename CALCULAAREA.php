<?php 

function CALCULAAREA($Area){
    
   if ($Area == 1)
    return 1;
   else
   return $Area**2 + ($Area-1)**2;
       
              
        
  }
  
 echo CALCULAAREA(3);
