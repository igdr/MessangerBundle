<?php
namespace Igdr\Bundle\MessangerBundle\Model;

use Igdr\Bundle\MessangerBundle\Service\MessangerService;

/**
 * Class MessangerTrait
 */
trait MessangerTrait
{
    /**
     * @var MessangerService
     */
    protected $messanger;

    /**
     * @param MessangerService $messanger
     *
     * @return $this
     */
    public function setMessanger(MessangerService $messanger)
    {
        $this->messanger = $messanger;

        return $this;
    }

    /**
     * @return \Igdr\Bundle\MessangerBundle\Service\MessangerService
     */
    public function getMessanger()
    {
        return $this->messanger;
    }

}