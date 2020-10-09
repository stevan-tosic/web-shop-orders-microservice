<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity\User;

use Ramsey\Uuid\UuidInterface;

/**
 * Class User
 */
class User implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var UuidInterface
     *
     */
    private $uuid;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var string
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     */
    private $confirmationTokenIssueDate;

    /**
     * @var bool
     */
    private $confirmationTokenValid;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var \DateTime
     */
    private $lastAccess;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var array
     */
    private $roles;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->uuid                        = \call_user_func('Ramsey\Uuid\Uuid::uuid1');
        $this->enabled                     = true;
        $this->roles                       = [];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getUuidToString(): string
    {
        return $this->uuid->toString();
    }

    /**
     * @param UuidInterface $uuid
     */
    public function setUuid(UuidInterface $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = \strtolower($email);
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     */
    public function setPlainPassword(string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->firstName.' '.$this->lastName;
    }

    /**
     * @return string
     */
    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle(?string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return string|null
     */
    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    /**
     * @param string $confirmationToken
     */
    public function setConfirmationToken(string $confirmationToken): void
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * @return \DateTime|null
     */
    public function getConfirmationTokenIssueDate(): ?\DateTime
    {
        return $this->confirmationTokenIssueDate;
    }

    /**
     * @param \DateTime $confirmationTokenIssueDate
     */
    public function setConfirmationTokenIssueDate(\DateTime $confirmationTokenIssueDate): void
    {
        $this->confirmationTokenIssueDate = $confirmationTokenIssueDate;
    }

    /**
     * @return bool|null
     */
    public function getConfirmationTokenValid(): ?bool
    {
        return $this->confirmationTokenValid;
    }

    /**
     * @param bool $confirmationTokenValid
     */
    public function setConfirmationTokenValid(bool $confirmationTokenValid): void
    {
        $this->confirmationTokenValid = $confirmationTokenValid;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     */
    public function setModified(\DateTime $modified): void
    {
        $this->modified = $modified;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastAccess(): ?\DateTime
    {
        return $this->lastAccess;
    }

    /**
     * @param \DateTime $lastAccess
     */
    public function setLastAccess(\DateTime $lastAccess): void
    {
        $this->lastAccess = $lastAccess;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        // we need to make sure to have at least one role
        $roles[] = static::ROLE_DEFAULT;

        return \array_unique($roles);
    }

    /**
     * {@inheritdoc}
     */
    public function addRole($role)
    {
        $role = \strtoupper($role);
        if (static::ROLE_DEFAULT === $role) {
            return $this;
        }

        if (!\in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasRole($role)
    {
        return \in_array(\strtoupper($role), $this->getRoles(), true);
    }

    /**
     * Clear roles
     */
    public function clearRoles()
    {
        $this->roles = [];
    }

    /**
     * Unused method from UserInterface
     */
    public function getSalt()
    {
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * @return bool|true
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return mixed
     */
    public function eraseCredentials()
    {
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return \serialize([
            $this->id,
            $this->email,
            $this->password,
        ]);
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            ) = \unserialize($serialized, ['allowed_classes' => false]);
    }

    /**
     * Returns highest User's role
     *
     * @return bool|mixed
     */
    public function getHighestRole()
    {
        foreach (self::ROLES_BY_IMPORTANCE as $role) {
            if (\in_array($role, $this->getRoles())) {
                return $role;
            }
        }

        return false;
    }

    /**
     * Returns if user has one of the admin roles
     *
     * @return bool|mixed
     */
    public function hasAdminRole()
    {
        return \in_array($this->getHighestRole(), [
            User::ROLE_SUPER_ADMIN,
            User::ROLE_ADMIN,
        ]);
    }
}
