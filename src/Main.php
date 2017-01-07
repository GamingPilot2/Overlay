<?php

namespace OP;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;                            
use pocketmine\event\Listener;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\level\Level;

class Main extends PluginBase implements Listener{

    public function onEnable(){
      $this->getLogger()->info("Overplay is now enabled.");
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
      switch($command->getName()){

       case "overplay":
         if($sender->hasPermission("lc.overplay")){
           if(isset($args[0]) && isset($args[1])){
             $name = strtolower(array_shift($args));
             $player = $sender->getServer()->getPlayer($name);
             $player->sendPopup("§c".implode(" ", $args)."\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", $this->owner->player);
             $player->sendMessage("§c[".$sender->getName()."] ".implode(" ", $args));
             $player->sendMessage("§c[".$sender->getName()."] ".implode(" ", $args));
             $player->sendMessage("§c[".$sender->getName()."] ".implode(" ", $args));
             $player->sendMessage("§c[".$sender->getName()."] ".implode(" ", $args));
             $player->sendMessage("§c[".$sender->getName()."] ".implode(" ", $args));
           }else{
             $sender->sendMessage("§cUtilise : /overplay [player] [msg]");
           }
         }else{
           $sender->sendMessage("§cYou don't have permission to do this.");
         }
         return true;
       }
    }
}
