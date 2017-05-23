<?php
namespace lazer\Invintoryresetonjoin{
	use pocketmine\event\Listener;
	use pocketmine\event\PlayerqUITEvent;
	use pocketmine\plugin\PluginBase;
	class MainClass extends PluginBase implements Listener {
		public onQuit(PlayerQuitEvent $ev) {
			for($i = 0; $i <= $ev->getPlayer()->getInventory()->getSize(); $i++) {
				$ev->getPlayer()->getInventory()->clear($i);
			}
		}
	}
}
