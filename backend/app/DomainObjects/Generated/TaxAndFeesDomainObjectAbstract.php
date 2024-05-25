<?php

namespace HiEvents\DomainObjects\Generated;

/**
 * THIS FILE IS AUTOGENERATED - DO NOT EDIT IT DIRECTLY.
 * @package HiEvents\DomainObjects\Generated
 */
abstract class TaxAndFeesDomainObjectAbstract extends \HiEvents\DomainObjects\AbstractDomainObject
{
    final public const SINGULAR_NAME = 'tax_and_fees';
    final public const PLURAL_NAME = 'tax_and_fees';
    final public const ID = 'id';
    final public const NAME = 'name';
    final public const CALCULATION_TYPE = 'calculation_type';
    final public const RATE = 'rate';
    final public const IS_ACTIVE = 'is_active';
    final public const DESCRIPTION = 'description';
    final public const CREATED_AT = 'created_at';
    final public const DELETED_AT = 'deleted_at';
    final public const UPDATED_AT = 'updated_at';
    final public const ACCOUNT_ID = 'account_id';
    final public const IS_DEFAULT = 'is_default';
    final public const TYPE = 'type';

    protected int $id;
    protected string $name;
    protected string $calculation_type;
    protected float $rate;
    protected ?bool $is_active = true;
    protected ?string $description = null;
    protected ?string $created_at = null;
    protected ?string $deleted_at = null;
    protected ?string $updated_at = null;
    protected int $account_id;
    protected bool $is_default = false;
    protected string $type;

    public function toArray(): array
    {
        return [
                    'id' => $this->id ?? null,
                    'name' => $this->name ?? null,
                    'calculation_type' => $this->calculation_type ?? null,
                    'rate' => $this->rate ?? null,
                    'is_active' => $this->is_active ?? null,
                    'description' => $this->description ?? null,
                    'created_at' => $this->created_at ?? null,
                    'deleted_at' => $this->deleted_at ?? null,
                    'updated_at' => $this->updated_at ?? null,
                    'account_id' => $this->account_id ?? null,
                    'is_default' => $this->is_default ?? null,
                    'type' => $this->type ?? null,
                ];
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCalculationType(string $calculation_type): self
    {
        $this->calculation_type = $calculation_type;
        return $this;
    }

    public function getCalculationType(): string
    {
        return $this->calculation_type;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setIsActive(?bool $is_active): self
    {
        $this->is_active = $is_active;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setCreatedAt(?string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function setDeletedAt(?string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function setUpdatedAt(?string $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    public function setAccountId(int $account_id): self
    {
        $this->account_id = $account_id;
        return $this;
    }

    public function getAccountId(): int
    {
        return $this->account_id;
    }

    public function setIsDefault(bool $is_default): self
    {
        $this->is_default = $is_default;
        return $this;
    }

    public function getIsDefault(): bool
    {
        return $this->is_default;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
