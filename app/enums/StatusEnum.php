<?php

namespace App\enums;

enum StatusEnum: int
{
    //

    case ACTIVE = 1;
    case INACTIVE = 0;
    case DRAFT = 2;
    case ARCHIVED = 3;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::DRAFT => 'Draft',
            self::ARCHIVED => 'Archived',
        };
    }
    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }
    public function isInactive(): bool
    {
        return $this === self::INACTIVE;
    }
    public function isDraft(): bool
    {
        return $this === self::DRAFT;
    }
    public function isArchived(): bool
    {
        return $this === self::ARCHIVED;
    }
    public static function fromValue(int $value): self
    {
        return match ($value) {
            1 => self::ACTIVE,
            0 => self::INACTIVE,
            2 => self::DRAFT,
            3 => self::ARCHIVED,
            default => throw new \InvalidArgumentException("Invalid status value: $value"),
        };
    }
    public static function toArray(): array
    {
        return [
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
            self::DRAFT->value => self::DRAFT->label(),
            self::ARCHIVED->value => self::ARCHIVED->label(),
        ];
    }
    public static function toSelectArray(): array
    {
        return [
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
            self::DRAFT->value => self::DRAFT->label(),
            self::ARCHIVED->value => self::ARCHIVED->label(),
        ];
    }
    public static function toJson(): string
    {
        return json_encode(self::toArray());
    }
}
