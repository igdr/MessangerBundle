<?php
namespace Igdr\Bundle\MessangerBundle\Model;

use Igdr\Bundle\MessangerBundle\Service\MessangerService;

/**
 * Interface MessangerInterface
 */
interface MessangerInterface
{
    /**
     * @param MessangerService $messanger
     *
     * @return mixed
     */
    public function setMessanger(MessangerService $messanger);
}