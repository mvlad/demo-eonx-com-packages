<?php
declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="activity_logs")
 */
class ActivityLog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private string $id;

    /**
     * @ORM\Column(type="text")
     */
    protected string $action;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $actorId = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $actorName = null;

    /**
     * @ORM\Column(type="text")
     */
    protected string $actorType;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    protected ?array $subjectData = null;

    /**
     * @ORM\Column(type="text")
     */
    protected string $subjectId;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    protected ?array $subjectOldData = null;

    /**
     * @ORM\Column(type="text")
     */
    protected string $subjectType;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    protected DateTimeImmutable $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    protected DateTimeImmutable $updatedAt;

    public function getAction(): string
    {
        return $this->action;
    }

    public function getActorId(): ?string
    {
        return $this->actorId;
    }

    public function getActorName(): ?string
    {
        return $this->actorName;
    }

    public function getActorType(): string
    {
        return $this->actorType;
    }

    /**
     * @return mixed[]|null
     */
    public function getSubjectData(): ?array
    {
        return $this->subjectData;
    }

    public function getSubjectId(): string
    {
        return $this->subjectId;
    }

    /**
     * @return mixed[]|null
     */
    public function getSubjectOldData(): ?array
    {
        return $this->subjectOldData;
    }

    public function getSubjectType(): string
    {
        return $this->subjectType;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function setActorId(?string $actorId = null): self
    {
        $this->actorId = $actorId;

        return $this;
    }

    public function setActorName(?string $actorName = null): self
    {
        $this->actorName = $actorName;

        return $this;
    }

    public function setActorType(string $actorType): self
    {
        $this->actorType = $actorType;

        return $this;
    }

    /**
     * @param mixed[]|null $subjectData
     */
    public function setSubjectData(?array $subjectData = null): self
    {
        $this->subjectData = $subjectData;

        return $this;
    }

    public function setSubjectId(string $subjectId): self
    {
        $this->subjectId = $subjectId;

        return $this;
    }

    /**
     * @param mixed[]|null $subjectOldData
     */
    public function setSubjectOldData(?array $subjectOldData = null): self
    {
        $this->subjectOldData = $subjectOldData;

        return $this;
    }

    public function setSubjectType(string $subjectType): self
    {
        $this->subjectType = $subjectType;

        return $this;
    }
}
