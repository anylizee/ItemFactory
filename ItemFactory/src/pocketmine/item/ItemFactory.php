<?php

declare(strict_types=1);

namespace pocketmine\item;

use pocketmine\item\Item;
use pocketmine\item\LegacyStringToItemParser;
use pocketmine\utils\SingletonTrait;

final class ItemFactory {
  
  use SingletonTrait;
  
  public function __construct() {
    self::setInstance($this);
  }
  
  public function getItem($id, $meta = 0, $count = 1): Item {
        return LegacyStringToItemParser::getInstance()->parse("{$id}:{$meta}")->setCount($count);
    }
}
?>