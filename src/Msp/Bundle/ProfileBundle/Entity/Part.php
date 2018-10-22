<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Entity;

class Part
{
    const LAYOUT_PLAIN = 'plain';

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $parentIdentifier;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $layout;

    /**
     * @var array
     */
    private $properties;

    /**
     * @var int
     */
    private $order;

    /**
     * Profile
     */
    private $profile;

    public function __construct()
    {
        $this->layout = self::LAYOUT_PLAIN;
        $this->properties = [];
        $this->order = 0;
    }

    /**
     * @return string|null
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
    public function getParentIdentifier()
    {
        return $this->parentIdentifier;
    }

    public function setParentIdentifier(string $parentIdentifier): self
    {
        $this->parentIdentifier = $parentIdentifier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLayout()
    {
        return $this->layout;
    }

    public function setLayout(string $layout): self
    {
        $this->layout = $layout;

        return $this;
    }
    
    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getProfile(): Profile
    {
        return $this->profile;
    }

    public function setProfile(Profile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }
}
