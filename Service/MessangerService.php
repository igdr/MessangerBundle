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
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $fromName;

    /**
     * @param string $from
     * @param string $fromName
     */
    public function __construct($from, $fromName)
    {
        $this->from = $from;
        $this->fromName = $fromName;

    }

    /**
     * @param \Swift_Mailer $mailer
     */
    public function setMailer(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param \Igdr\Bundle\MessangerBundle\Model\Message $message
     *
     * @return bool|string
     */
    public function send(Message $message)
    {
        try {
            $swiftMessage = \Swift_Message::newInstance()
                ->setSubject($message->getSubject())
                ->setFrom($message->getFrom() ? $message->getFrom() : $this->from, $message->getFromName() ? $message->getFromName() : $this->fromName)
                ->setTo($message->getTo(), $message->getToName());
            $swiftMessage->setBody($message->getContent(), 'text/html');

            $this->mailer->send($swiftMessage);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return true;
    }
}