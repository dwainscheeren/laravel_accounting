<?php
namespace Dvb\Accounting;

class AccountingRelation {
    protected ?int $id;
    protected ?\DateTime $add_date;
    protected int $code;
    protected string $company;
    protected ?string $contact;
    protected ?string $gender;
    protected ?string $address;
    protected ?string $zipcode;
    protected ?string $city;
    protected ?string $country;
    protected ?string $phone;
    protected ?string $cell_phone;
    protected ?string $email;
    protected ?string $site;
    protected ?string $notes;
    protected ?string $vat_number;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return AccountingRelation
     * @throws AccountingException
     */
    public function setId(?int $id): AccountingRelation
    {
        if ($id < 0) {
            throw new AccountingException("Id must be a positive integer");
        }

        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getAddDate(): ?\DateTime
    {
        return $this->add_date;
    }

    /**
     * @param \DateTime|null $add_date
     * @return AccountingRelation
     */
    public function setAddDate(?\DateTime $add_date): AccountingRelation
    {
        $this->add_date = $add_date;
        return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return AccountingRelation
     * @throws AccountingException
     */
    public function setCode(int $code): AccountingRelation
    {
        if ($code < 0) {
            throw new AccountingException("Code must be a positive integer.");
        }

        $this->code = $code;
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
     * @return AccountingRelation
     */
    public function setCompany(string $company): AccountingRelation
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContact(): ?string
    {
        return $this->contact;
    }

    /**
     * @param string|null $contact
     * @return AccountingRelation
     */
    public function setContact(?string $contact): AccountingRelation
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return AccountingRelation
     */
    public function setGender(?string $gender): AccountingRelation
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return AccountingRelation
     */
    public function setAddress(?string $address): AccountingRelation
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param string|null $zipcode
     * @return AccountingRelation
     */
    public function setZipcode(?string $zipcode): AccountingRelation
    {
        $zipcode = str_replace(' ', '', strtoupper($zipcode));

        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return AccountingRelation
     */
    public function setCity(?string $city): AccountingRelation
    {
        $city = ucfirst($city);

        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     * @return AccountingRelation
     */
    public function setCountry(?string $country): AccountingRelation
    {
        $country = ucfirst($country);

        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return AccountingRelation
     */
    public function setPhone(?string $phone): AccountingRelation
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCellPhone(): ?string
    {
        return $this->cell_phone;
    }

    /**
     * @param string|null $cell_phone
     * @return AccountingRelation
     */
    public function setCellPhone(?string $cell_phone): AccountingRelation
    {
        $this->cell_phone = $cell_phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return AccountingRelation
     * @throws AccountingException
     */
    public function setEmail(?string $email): AccountingRelation
    {
        if (empty($email)) {
            $this->email = null;
            return $this;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new AccountingException("Email must be a valid emailaddress");
        }

        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->site;
    }

    /**
     * @param string|null $site
     * @return AccountingRelation
     * @throws AccountingException
     */
    public function setSite(?string $site): AccountingRelation
    {
        if (empty($site)) {
            $this->site = null;
            return $this;
        }

        if (!filter_var($site, FILTER_VALIDATE_URL)) {
            throw new AccountingException("Site must be a valid URL");
        }

        $this->site = $site;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * @param string|null $notes
     * @return AccountingRelation
     */
    public function setNotes(?string $notes): AccountingRelation
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vat_number;
    }

    /**
     * @param string|null $vat_number
     * @return AccountingRelation
     */
    public function setVatNumber(?string $vat_number): AccountingRelation
    {
        $this->vat_number = $vat_number;
        return $this;
    }
}
