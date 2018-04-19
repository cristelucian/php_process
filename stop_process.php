<?php

/**
 * Author: Criste-Horge Lucian 
 * email: luci.criste@gmail.com
 */
include 'class.Process.php';

if (!empty($argv[1] && !(empty($argv[2])))) {
    $pr = new Process();
    $pr->getProcess($argv[1],$argv[2]);
    switch ($argv[2]) {
        case 'kill':
            $pr->killProcess($pr->pid,$pr->prname);
            break;
        
        case 'suspend':
            $pr->suspendProcess($pr->pid,$pr->prname);
            break;
         case 'resume':
            $pr->resumeProcess($pr->pid,$pr->prname);
            break;
        
        default:
              print("err:No process to be killed \n");
              print("use php stop_proces.php {name/comand} kill/suspend/resume \n");
              print("Try again");
            break;
    }
    
}else{
    print("err:No process to be killed \n");
    print("use php stop_proces.php {name/comand} kill/suspend/resume \n");
    print("Try again");
}
