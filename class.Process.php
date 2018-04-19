<?php 

/**
 * Author: Criste-Horge Lucian 
 * email: luci.criste@gmail.com
 * Process class is used to search by a specific porcess and kill the porcess by id
 * 
 */

 class Process {
   public $pid;
   public $prname;
   public $action;

   public function getProcess($proces_name,$action) {
    exec("ps -aux |grep ".$proces_name." | grep -v stop_proces | grep -v grep | awk '{print $2 \" \" $12}'", $output);
    $arr=explode(" ",$output[0]);
     $this->pid=$arr[0];
     $this->prname=$arr[1];
     $this->action=$action;
    return $this->pid;
   }

   public function suspendProcess($id,$name) {
        print("Process with id: " .$id. " and name ".$name." will be susspended \n");
        return exec("kill -STOP " .$id);
   }

   public function resumeProcess($id,$name) {
        print("Process with id: " .$id. " and name ".$name." will be resume \n");
        return exec("kill -CONT " .$id);
   }

    public function killProcess($id , $name){
        print("Process with id: " .$id. " and name ".$name." will be kiled \n");
        return exec("kill -9 ".$id);
   }

 }

