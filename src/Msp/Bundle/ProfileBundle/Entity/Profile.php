<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection ;

class Profile
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $occupation;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var Contacts
     */
    private $contacts;

    /**
     * @var Part[]|ArrayCollection
     */
    private $parts;

    public function __construct()
    {
        $this->parts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return Contacts|null
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    public function setContacts(Contacts $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return Part[]|Collection
     */
    public function getParts(): Collection
    {
        return $this->parts;
    }

    public function setParts(array $parts): self
    {
        $this->parts = $parts;

        return $this;
    }

    public function addPart(Part $part): self
    {
        $this->parts[] = $part;

        return $this;
    }
}
