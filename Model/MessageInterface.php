<?php

namespace Ornicar\MessageBundle\Model;

use FOS\UserBundle\Model\UserInterface;

/**
 * Message model
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface MessageInterface extends ReadableInterface
{
    /**
     * Gets the message unique id
     *
     * @return mixed
     **/
    function getId();

    /**
     * @return ThreadInterface
     */
    function getThread();

    /**
     * @param  ThreadInterface
     * @return null
     */
    function setThread(ThreadInterface $thread);

    /**
     * @return DateTime
     */
    function getCreatedAt();

    /**
     * @return string
     */
    function getBody();

    /**
     * @param  string
     * @return null
     */
    function setBody($body);

    /**
     * @return UserInterface
     */
    function getSender();

    /**
     * @param  UserInterface
     * @return null
     */
    function setSender(UserInterface $sender);
}
