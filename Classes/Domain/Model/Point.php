<?php
namespace RubenSteeb\Dominion\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntitiy;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use RubenSteeb\Dominion\Domain\Model\Game;
use RubenSteeb\Dominion\Domain\Model\Player;

class Point extends AbstractEntitiy
{
    /**
     * value of the Point
     * @var integer;  
     */
    protected $value;

    /**
     * player that owns this point
     * @todo Decide: Store the point here, or store all points in the player DomainObject or both     
     * 
     * @var ObjectStorage<Player>     
     */
    protected $player;

    /**
     * game that this point was in
     * @todo Decide: Store game here or store all points inside the game or both
     * 
     * @var ObjectStorage<Game>
     */
    protected $game;

    /**
     * initialize ObejctStorages
     * @return void
     */
    protected function initalizeObjectStorages()
    {
        $this->setGame(new ObjectStorage());
        $this->setPlayer(new ObejctStorage());
    }

    public function __construct()
    {
        $this->initalizeObjectStorages();
    }

    /**
     * set Value of this Point
     * 
     * @param integer
     * @return void
     */

    public function setValue(integer $value)
    {
        $this->value = $value;
    }

    /**
     * get the Value of this Point
     * 
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * set Player
     * 
     * @param ObjectStorage<Player>
     * @return void
     */
    public function setPlayer(ObjectStorage $objectStorage)
    {
        $this->player = $objectStorage;
    }

    /**
     * get Player
     * 
     * @return ObjectStorage
     */
    public function getPlayer()
    {
        return clone $this->player;
    }

    /**
     * add a player
     * 
     * @param Player
     * @return void
     */
    public function addPlayer(Player $player)
    {
        $this->player->attach($player);
    }  

    /**
     * remove a player
     * 
     * @param Player $player
     * @return ObjectStorage 
     */
    public function removePlayer(Player $player)
    {
        $this->player->detach($player);
    }

    /**
     * set the game
     * 
     * @param ObjectStorage<Game>
     * @return void
     */
    public function setGame(ObjectStorage $objectStorage)
    {
        $this->game = $objectStorage;
    }

    /**
     * get the game
     * 
     * @return ObjectStorage<Game>
     */
    public function getGame()
    {
        return clone $this->game;
    }

    /**
     * add a game
     * 
     * @param Game
     * @return void
     */
    public function addGame(Game $game)
    {
        $this->game->attach($game);
    }

    /**
     * remove a game
     * 
     * @param Game
     * @return void
     */
    public function removeGame(Game $game)
    {
        $this->game->detach($game);
    }
}	




