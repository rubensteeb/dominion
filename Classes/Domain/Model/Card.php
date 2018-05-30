<?php
namespace RubenSteeb\Dominion\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntitiy;

class Card extends AbstractEntity
{
    /**
     * name of the card
     * 
     * @var string
     */
    protected $name;

    /**
     * description of the card
     * 
     * @var string
     */
    protected $description;

    //@todo provide image

    /**
     * cost of this card
     * 
     * @var integer
     */
    protected $cost;

    /**
     * set the name of this card
     * 
     * @param string
     * @return void
     */

    public function setName(string $name)
    {
        $this->name = $name;    
    }

    /**
     * get the name of this card
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set the description of this card
     * 
     * @param string
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * get the descritpion of this card
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * set the cost for this card
     * 
     * @param integer
     * @return void
     */
    public function setCost(integer $cost)
    {
        $this->cost = $cost;
    }

    /**
     * get the cost for this card
     * 
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }



    
    
	
}