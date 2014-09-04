<?php
namespace Igdr\Bundle\MessangerBundle\Tests\Service;

use Igdr\Bundle\MessangerBundle\Model\Message;
use Igdr\Bundle\MessangerBundle\Service\MessangerService;

/**
 * Class MessangerServiceTest
 */
class MessangerServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testSend()
    {
        $mailer = $this->getMockBuilder('\Swift_Mailer')
            ->disableOriginalConstructor()
            ->getMock();

        $mailer->expects($this->once())
            ->method('send');

        $message = new Message();
        $message->setContent('content');
        $message->setTo('test@test.com');
        $message->setToName('test');
        $message->setFrom('support@test.com');
        $message->setFromName('support');

        $masanger = new MessangerService('from@test.com');
        $masanger->setMailer($mailer);
        $masanger->send($message);

        $this->assertTrue(true);
    }
}