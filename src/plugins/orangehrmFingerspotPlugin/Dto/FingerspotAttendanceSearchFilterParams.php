<?php

//  @author Muhammad Zulfi Rusdani <donimuzur@gmail.com>
//  @copyright 2023 PT Gunung Emas Putih


namespace OrangeHRM\Fingerspot\Dto;

use DateTime;
use OrangeHRM\Core\Dto\FilterParams;
use OrangeHRM\Fingerspot\Traits\Service\FingerspotAttendanceServiceTrait;

class FingerspotAttendanceSearchFilterParams extends FilterParams
{
    use FingerspotAttendanceServiceTrait;

    public const ALLOWED_SORT_FIELDS = [
        'fingerspotAttendance.pin',
        'fingerspotAttendance.scanDate',
    ];
    /**
     * @var string|null
     */
    protected ?string $pin = null;

     /**
     * @var DateTime|null
     */
    protected ?DateTime $startDate = null;

     /**
     * @var DateTime|null
     */
    protected ?DateTime $endDate = null;

    public function __construct()
    {
        $this->setSortField('fingerspotAttendance.pin');
    }

    /**
     * @return string|null
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * @param string|null $pin
     */
    public function setPin(?string $pin): void
    {
        $this->pin = $pin;
    }

    /**
     * @return DateTime|null
     */
    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $pin
     */
    public function setStartDate(?DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTime|null
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $pin
     */
    public function setEndDate(?DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }
}
