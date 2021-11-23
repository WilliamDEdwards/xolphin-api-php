<?php

declare(strict_types=1);

namespace Xolphin\Requests;

use Xolphin\Requests\Contracts\ApiRequestInterface;

class ReissueRequest implements ApiRequestInterface
{
    /** @var string */
    private string $csr;

    /** @var string $dcvType use one of the following: EMAIL_VALIDATION, FILE_VALIDATION, DNS_VALIDATION */
    private string $dcvType;

    /** @var string[] */
    private array $subjectAlternativeNames;

    /** @var DCVDomain[] */
    private array $dcv = [];

    /** @var string */
    private string $company;

    /** @var string */
    private string $department;

    /** @var string */
    private string $address;

    /** @var string */
    private string $zipcode;

    /** @var string */
    private string $city;

    /** @var string */
    private string $approverFirstName;

    /** @var string */
    private string $approverLastName;

    /** @var string */
    private string $approverEmail;

    /** @var string */
    private string $approverPhone;

    /** @var string */
    private string $kvk;

    /** @var string */
    private string $reference;

    /** @var string|null */
    private ?string $uniqueValueDcv = null;

    /** @var bool */
    private bool $disableFreeSan = false;

    /**
     * Reissue constructor.
     * @param string $csr
     * @param string $dcvType use one of the following: EMAIL_VALIDATION, FILE_VALIDATION, DNS_VALIDATION
     */
    public function __construct(string $csr, string $dcvType)
    {
        $this->csr = $csr;
        $this->dcvType = $dcvType;
    }

    /**
     * @return string[]
     */
    public function getSubjectAlternativeNames(): array
    {
        return $this->subjectAlternativeNames;
    }

    /**
     * @param string $subjectAlternativeNames
     * @return ReissueRequest
     */
    public function addSubjectAlternativeNames(string $subjectAlternativeNames): ReissueRequest
    {
        $this->subjectAlternativeNames[] = $subjectAlternativeNames;
        return $this;
    }

    /**
     * @return DCVDomain[]
     */
    public function getDcv(): array
    {
        return $this->dcv;
    }

    /**
     * @param DCVDomain $dcv
     * @return ReissueRequest
     */
    public function addDcv(DCVDomain $dcv): ReissueRequest
    {
        $this->dcv[] = $dcv;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return ReissueRequest
     */
    public function setCompany(string $company): ReissueRequest
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return ReissueRequest
     */
    public function setDepartment(string $department): ReissueRequest
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return ReissueRequest
     */
    public function setAddress(string $address): ReissueRequest
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return ReissueRequest
     */
    public function setZipcode(string $zipcode): ReissueRequest
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ReissueRequest
     */
    public function setCity(string $city): ReissueRequest
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverFirstName(): string
    {
        return $this->approverFirstName;
    }

    /**
     * @param string $approverFirstName
     * @return ReissueRequest
     */
    public function setApproverFirstName(string $approverFirstName): ReissueRequest
    {
        $this->approverFirstName = $approverFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverLastName(): string
    {
        return $this->approverLastName;
    }

    /**
     * @param string $approverLastName
     * @return ReissueRequest
     */
    public function setApproverLastName(string $approverLastName): ReissueRequest
    {
        $this->approverLastName = $approverLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail(): string
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return ReissueRequest
     */
    public function setApproverEmail(string $approverEmail): ReissueRequest
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverPhone(): string
    {
        return $this->approverPhone;
    }

    /**
     * @param string $approverPhone
     * @return ReissueRequest
     */
    public function setApproverPhone(string $approverPhone): ReissueRequest
    {
        $this->approverPhone = $approverPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getKvk(): string
    {
        return $this->kvk;
    }

    /**
     * @param string $kvk
     * @return ReissueRequest
     */
    public function setKvk(string $kvk): ReissueRequest
    {
        $this->kvk = $kvk;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return ReissueRequest
     */
    public function setReference(string $reference): ReissueRequest
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUniqueValueDcv(): ?string
    {
        return $this->uniqueValueDcv;
    }

    /**
     * @param string $uniqueValue
     * @return ReissueRequest
     */
    public function setUniqueValueDcv(string $uniqueValue): ReissueRequest
    {
        $this->uniqueValueDcv = $uniqueValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableFreeSan(): bool
    {
        return $this->disableFreeSan;
    }

    /**
     * @param bool $disableFreeSan
     * @return ReissueRequest
     */
    public function setDisableFreeSan(bool $disableFreeSan): ReissueRequest
    {
        $this->disableFreeSan = $disableFreeSan;
        return $this;
    }

    /**
     * @return array
     */
    public function getApiRequestBody(): array
    {
        $result = [];
        $result['csr'] = $this->csr;
        $result['dcvType'] = $this->dcvType;
        if (!empty($this->subjectAlternativeNames)) {
            $result['subjectAlternativeNames'] = implode(',', $this->subjectAlternativeNames);
        }
        if (!empty($this->dcv)) {
            $result['dcv'] = json_encode($this->dcv);
        }
        if (!empty($this->company)) {
            $result['company'] = $this->company;
        }
        if (!empty($this->department)) {
            $result['department'] = $this->department;
        }
        if (!empty($this->address)) {
            $result['address'] = $this->address;
        }
        if (!empty($this->zipcode)) {
            $result['zipcode'] = $this->zipcode;
        }
        if (!empty($this->city)) {
            $result['city'] = $this->city;
        }
        if (!empty($this->approverFirstName)) {
            $result['approverFirstName'] = $this->approverFirstName;
        }
        if (!empty($this->approverLastName)) {
            $result['approverLastName'] = $this->approverLastName;
        }
        if (!empty($this->approverEmail)) {
            $result['approverEmail'] = $this->approverEmail;
        }
        if (!empty($this->approverPhone)) {
            $result['approverPhone'] = $this->approverPhone;
        }
        if (!empty($this->kvk)) {
            $result['kvk'] = $this->kvk;
        }
        if (!empty($this->reference)) {
            $result['reference'] = $this->reference;
        }
        if (!empty($this->uniqueValueDcv)) {
            $result['uniqueValueDcv'] = $this->uniqueValueDcv;
        }

        if (!empty($this->disableFreeSan)) {
            $result['disableFreeSan'] = $this->disableFreeSan;
        }

        return $result;
    }
}