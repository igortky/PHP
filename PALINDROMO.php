<?php
function PALINDROMO($STR){
   
      if($STR == strrev($STR) || strlen($STR)== 1) {
              return true;
            }
      else {
              return false;
                              
            }
       
              
        
  }
  
 echo PALINDROMO("a");
