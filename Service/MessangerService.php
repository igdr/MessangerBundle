<?php
namespace Igdr\Bundle\MessangerBundle\Service;

use Igdr\Bundle\MessangerBundle\Model\Message;

/**
 * Class MessangerService
 */
class MessangerService
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @param string $from
     */
    public function __construct($from)
    {
        $this->from = $from;
    }

    /**
     * @param \Swift_Mailer $mailer
     */
    public function setMailer(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param Message $message
     */
    public function send(Message $message)
    {
        $swiftMessage = \Swift_Message::newInstance()
            ->setSubject($message->getSubject())
            ->setFrom($message->getFrom() ? $message->getFrom() : $this->from, $message->getFromName())
            ->setTo($message->getTo(), $message->getToName());
        $swiftMessage->setBody($message->getContent(), 'text/html');

        $this->mailer->send($swiftMessage);
    }
}