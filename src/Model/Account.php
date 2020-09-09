<?php

namespace Phpackage\Siigo\Model;

class Account implements Model
{
    use ArrayableModel;

    /**
     * @var int|null Identificador del tercero (Parámetro de salida)
     */
    public $id;

    /**
     * @var bool|null Tipo de tercero: Prospecto
     */
    public $isLeaflet;

    /**
     * @var bool|null Tipo de tercero: Cliente
     */
    public $isCustomer;

    /**
     * @var bool|null Tipo de tercero: Proveedor
     */
    public $isSupplier;

    /**
     * @var bool|null Tipo de tercero: Distribuidor
     */
    public $isDealer;

    /**
     * @var bool|null Tipo de tercero: Otros
     */
    public $isBank;

    /**
     * @var bool True si es una Empresa, False si es una persona.
     */
    public $isSocialReason;

    /**
     * @var string|null Razón social
     */
    public $fullName;

    /**
     * @var string|null Nombres
     */
    public $firstName;

    /**
     * @var string|null Apellidos
     */
    public $lastName;

    /**
     * @var int Tipo identificación
     */
    public $idTypeCode;

    /**
     * @var string Identificación
     */
    public $identification;

    /**
     * @var int Digito verificación (Si el tipo de identificación es NIT se calcula)
     */
    public $checkDigit = -1;

    /**
     * @var int Sucursal
     */
    public $branchOffice = 0;

    /**
     * @var bool Tipo de régimen IVA: True: Responsable de IVA / False: No responsable de IVA
     */
    public $isVATCompanyType;

    /**
     * @var string Página web
     */
    public $webSite = '';

    /**
     * @var City|null Ciudad
     */
    public $city;

    /**
     * @var string Dirección
     */
    public $address;

    /**
     * @var string Código Postal
     */
    public $postalCode = '';

    /**
     * @var Phone|null Fax
     */
    public $fax;

    /**
     * @var Phone Teléfono
     */
    public $phone;

    /**
     * @var string Correo electrónico
     */
    public $email = '';

    /**
     * @var bool Estado: True Activo, False Inactivo
     */
    public $isActive;

    /**
     * @var int Usuarios relacionados con el tercero: Responsable
     */
    public $directorID = -1;

    /**
     * @var int
     */
    public $salesmanID = -1;

    /**
     * @var int Estado de cuenta: Usuario Cobrador
     */
    public $collectorID = -1;

    /**
     * @var int ID del contacto principal
     */
    public $principalContactID = 0;

    /**
     * @var string[] Responsabilidades Fiscales (Obligatorio para facturación electrónica)
     */
    public $fiscalResponsibilities = [];

    private function __construct()
    {
    }

    public static function forCompany(
        int $idTypeCode,
        string $fullName,
        string $identification,
        bool $isVATCompanyType,
        string $address,
        Phone $phone,
        bool $isActive = true
    ): Account {
        $account = new self();
        $account->isSocialReason = true;
        $account->idTypeCode = $idTypeCode;
        $account->fullName = $fullName;
        $account->identification = $identification;
        $account->isVATCompanyType = $isVATCompanyType;
        $account->address = $address;
        $account->phone = $phone;
        $account->isActive = $isActive;

        return $account;
    }

    public static function forPerson(
        int $idTypeCode,
        string $firstName,
        string $lastName,
        string $identification,
        bool $isVATCompanyType,
        string $address,
        Phone $phone,
        bool $isActive = true
    ): Account {
        $account = new self();
        $account->isSocialReason = false;
        $account->idTypeCode = $idTypeCode;
        $account->firstName = $firstName;
        $account->lastName = $lastName;
        $account->identification = $identification;
        $account->isVATCompanyType = $isVATCompanyType;
        $account->address = $address;
        $account->phone = $phone;
        $account->isActive = $isActive;

        return $account;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Account
     */
    public function setId(?int $id): Account
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isLeaflet(): ?bool
    {
        return $this->isLeaflet;
    }

    /**
     * @param bool|null $isLeaflet
     * @return Account
     */
    public function setIsLeaflet(?bool $isLeaflet): Account
    {
        $this->isLeaflet = $isLeaflet;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isCustomer(): ?bool
    {
        return $this->isCustomer;
    }

    /**
     * @param bool|null $isCustomer
     * @return Account
     */
    public function setIsCustomer(?bool $isCustomer): Account
    {
        $this->isCustomer = $isCustomer;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSupplier(): ?bool
    {
        return $this->isSupplier;
    }

    /**
     * @param bool|null $isSupplier
     * @return Account
     */
    public function setIsSupplier(?bool $isSupplier): Account
    {
        $this->isSupplier = $isSupplier;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isDealer(): ?bool
    {
        return $this->isDealer;
    }

    /**
     * @param bool|null $isDealer
     * @return Account
     */
    public function setIsDealer(?bool $isDealer): Account
    {
        $this->isDealer = $isDealer;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isBank(): ?bool
    {
        return $this->isBank;
    }

    /**
     * @param bool|null $isBank
     * @return Account
     */
    public function setIsBank(?bool $isBank): Account
    {
        $this->isBank = $isBank;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSocialReason(): bool
    {
        return $this->isSocialReason;
    }

    /**
     * @param bool $isSocialReason
     * @return Account
     */
    public function setIsSocialReason(bool $isSocialReason): Account
    {
        $this->isSocialReason = $isSocialReason;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @param string|null $fullName
     * @return Account
     */
    public function setFullName(?string $fullName): Account
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Account
     */
    public function setFirstName(?string $firstName): Account
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Account
     */
    public function setLastName(?string $lastName): Account
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdTypeCode(): int
    {
        return $this->idTypeCode;
    }

    /**
     * @param int $idTypeCode
     * @return Account
     */
    public function setIdTypeCode(int $idTypeCode): Account
    {
        $this->idTypeCode = $idTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentification(): string
    {
        return $this->identification;
    }

    /**
     * @param string $identification
     * @return Account
     */
    public function setIdentification(string $identification): Account
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckDigit(): int
    {
        return $this->checkDigit;
    }

    /**
     * @param int $checkDigit
     * @return Account
     */
    public function setCheckDigit(int $checkDigit): Account
    {
        $this->checkDigit = $checkDigit;
        return $this;
    }

    /**
     * @return int
     */
    public function getBranchOffice(): int
    {
        return $this->branchOffice;
    }

    /**
     * @param int $branchOffice
     * @return Account
     */
    public function setBranchOffice(int $branchOffice): Account
    {
        $this->branchOffice = $branchOffice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsVATCompanyType(): bool
    {
        return $this->isVATCompanyType;
    }

    /**
     * @param bool $isVATCompanyType
     * @return Account
     */
    public function setIsVATCompanyType(bool $isVATCompanyType): Account
    {
        $this->isVATCompanyType = $isVATCompanyType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebSite(): string
    {
        return $this->webSite;
    }

    /**
     * @param string $webSite
     * @return Account
     */
    public function setWebSite(string $webSite): Account
    {
        $this->webSite = $webSite;
        return $this;
    }

    /**
     * @return City|null
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

    /**
     * @param City|null $city
     * @return Account
     */
    public function setCity(?City $city): Account
    {
        $this->city = $city;
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
     * @return Account
     */
    public function setAddress(string $address): Account
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Account
     */
    public function setPostalCode(string $postalCode): Account
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return Phone|null
     */
    public function getFax(): ?Phone
    {
        return $this->fax;
    }

    /**
     * @param Phone|null $fax
     * @return Account
     */
    public function setFax(?Phone $fax): Account
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone(): Phone
    {
        return $this->phone;
    }

    /**
     * @param Phone $phone
     * @return Account
     */
    public function setPhone(Phone $phone): Account
    {
        $this->phone = $phone;
        return $this;
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
     * @return Account
     */
    public function setEmail(string $email): Account
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return Account
     */
    public function setIsActive(bool $isActive): Account
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getDirectorID(): int
    {
        return $this->directorID;
    }

    /**
     * @param int $directorID
     * @return Account
     */
    public function setDirectorID(int $directorID): Account
    {
        $this->directorID = $directorID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesmanID(): int
    {
        return $this->salesmanID;
    }

    /**
     * @param int $salesmanID
     * @return Account
     */
    public function setSalesmanID(int $salesmanID): Account
    {
        $this->salesmanID = $salesmanID;
        return $this;
    }

    /**
     * @return int
     */
    public function getCollectorID(): int
    {
        return $this->collectorID;
    }

    /**
     * @param int $collectorID
     * @return Account
     */
    public function setCollectorID(int $collectorID): Account
    {
        $this->collectorID = $collectorID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrincipalContactID(): int
    {
        return $this->principalContactID;
    }

    /**
     * @param int $principalContactID
     * @return Account
     */
    public function setPrincipalContactID(int $principalContactID): Account
    {
        $this->principalContactID = $principalContactID;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFiscalResponsibilities(): array
    {
        return $this->fiscalResponsibilities;
    }

    /**
     * @param array $fiscalResponsibilityCodes
     * @return Account
     */
    public function addFiscalResponsibility(array $fiscalResponsibilityCodes): Account
    {
        $this->fiscalResponsibilities[] = $fiscalResponsibilityCodes;
        return $this;
    }
}
