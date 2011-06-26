<?php

namespace Ornicar\MessageBundle\Twig\Extension;

use Ornicar\MessageBundle\Authorizer\AuthorizerInterface;
use Ornicar\MessageBundle\Model\ReadableInterface;

class MessageExtension extends \Twig_Extension
{
    protected $authorizer;

    public function __construct(AuthorizerInterface $authorizer)
    {
        $this->authorizer = $authorizer;
    }

    /**
     * Returns a list of global functions to add to the existing list.
     *
     * @return array An array of global functions
     */
    public function getFunctions()
    {
        return array(
            'ornicar_message_is_read'  => new \Twig_Function_Method($this, 'isRead')
        );
    }

    /**
     * Tells if this readable (thread or messae) is read by the current user
     *
     * @return boolean
     */
    public function isRead(ReadableInterface $readable)
    {
        return $readable->isReadByParticipant($this->getAuthenticatedUser());
    }

    /**
     * Gets the current authenticated user
     *
     * @return UserInterface
     */
    protected function getAuthenticatedUser()
    {
        return $this->authorizer->getAuthenticatedUser();
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'ornicar_message';
    }
}
