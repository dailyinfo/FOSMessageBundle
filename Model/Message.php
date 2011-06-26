<?php

namespace Ornicar\MessageBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;
use DateTime;

/**
 * Abstract message model
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
abstract class Message implements MessageInterface
{
    /**
     * Unique id of the message
     *
     * @var mixed
     */
    protected $id;

    /**
     * User who sent the message
     *
     * @var UserInterface
     */
    protected $sender;

    /**
     * Text body of the message
     *
     * @var string
     */
    protected $body;

    /**
     * Date when the message was sent
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * Thread the message belongs to
     *
     * @var ThreadInterface
     */
    protected $thread;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * Gets the message unique id
     *
     * @return mixed
     **/
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ThreadInterface
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param  ThreadInterface
     * @return null
     */
    public function setThread(ThreadInterface $thread)
    {
        $this->thread = $thread;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param  string
     * @return null
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return UserInterface
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param  UserInterface
     * @return null
     */
    public function setSender(UserInterface $sender)
    {
        $this->sender = $sender;
    }
}
