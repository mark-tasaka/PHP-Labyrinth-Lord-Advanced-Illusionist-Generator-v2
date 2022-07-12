<?php

/*Illusionist */
function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,251";
          break;

        case "2":
            $xpNext = "4,501";
        break;
        
        case "3":
            $xpNext = "9,001";
        break;
        
        case "4":
            $xpNext = "18,001";
        break;
        
        case "5":
            $xpNext = "36,001";
        break;
        
        case "6":
            $xpNext = "80,001";
        break;        

        case "7":
            $xpNext = "160,001";
        break;
                
        case "8":
            $xpNext = "310,001";
        break;
                
        case "9":
            $xpNext = "450,001";
        break;
                
        case "10":
            $xpNext = "600,001";
        break;
                
        case "11":
            $xpNext = "750,001";
        break;
                
        case "12":
            $xpNext = "850,001";
        break;
                
        case "13":
            $xpNext = "950,001";
        break;
                
        case "14":
            $xpNext = "1,050,001";
        break;
                
        case "15":
            $xpNext = "1,150,001";
        break;
                
        case "16":
            $xpNext = "1,250,001";
        break;
                
        case "17":
            $xpNext = "1,350,001";
        break;
                
        case "18":
            $xpNext = "1,450,001";
        break;
                
        case "19":
            $xpNext = "1,550,001";
        break;
                
        case "20":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>