<? php

  function SeculoAno($ano){
   $sec = 0;
    
    
        if(intval(substr($ano, -2)) == 00) {
    
            $sec =  intval(substr($ano,0,2)) ;
            }
        else{
            $sec = intval(substr($ano,0,2)) +1 ;
            }
        
    return $sec;
  }
  
 echo SeculoAno("1900") ;
