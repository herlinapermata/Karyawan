 break;
        case 'bagian':
            include "bagian/bagian.php";
            break;  
         case 'bagiancreate':
                include "bagian/bagiancreate.php";
             break;   
         case 'bagianupdate':
             include "bagian/bagianupdate.php";
             break;  
         case 'bagiandelete':
            include "bagian/bagiandelete.php";
            break;             
        default:
            include "dashboard.php";
            break;