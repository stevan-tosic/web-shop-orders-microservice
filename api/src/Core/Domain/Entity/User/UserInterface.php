<?php

namespace App\Core\Domain\Entity\User;

use Symfony\Component\Security\Core\User\UserInterface as SymfonyUserInterface;

/**
 * Interface UserInterface
 */
interface UserInterface extends SymfonyUserInterface, \Serializable
{
    const ROLE_DEFAULT = 'ROLE_USER';
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';
    const ROLE_PREVIOUS_ADMIN = 'ROLE_PREVIOUS_ADMIN';

    const ROLES_BY_IMPORTANCE = [
        self::ROLE_SUPER_ADMIN,
        self::ROLE_ADMIN,
        self::ROLE_USER,
    ];

    const ENABLED = true;
    const DISABLED = false;

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return array
     */
    public function getRoles();

    /**
     * {@inheritdoc}
     */
    public function hasRole($role);

    /**
     * @return null|string|void
     */
    public function getSalt();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return bool|true
     */
    public function isEnabled();

    /**
     * @return mixed
     */
    public function eraseCredentials();

    /**
     * @return string
     */
    public function serialize();

    /**
     * @param string $serialized
     */
    public function unserialize($serialized);
}
