<?php

namespace Phpackage\Siigo\Model;

class Contact implements Model
{
    use ArrayableModel;

    /**
     * @var int|null Identificador del contacto (Parámetro de salida)
     */
    public $id;

    /**
     * @var int|null Código del contacto
     */
    public $code;

    /**
     * @var int Id del tercero
     */
    public $accountID;

    /**
     * @var Phone|null Teléfono oficina
     */
    public $phone1;

    /**
     * @var Phone|null Teléfono móvil
     */
    public $mobile;

    /**
     * @var string Correo electrónico contacto
     */
    public $email;

    /**
     * @var string Nombres
     */
    public $firstName;

    /**
     * @var string Apellidos
     */
    public $lastName;

    /**
     * @var Phone|null Fax
     */
    public $fax;

    /**
     * @var bool Es contacto principal
     */
    public $isPrincipal;

    /**
     * @var int Género: 0 si es Femenino, 1 si es Maculino, 2 por defecto
     */
    public $gender;

    /**
     * @var int|null Identificador de Cargo
     */
    public $chargeID;

    /**
     * @var string|null Fecha de nacimiento. Formato yyyymmdd
     */
    public $birthDate;

    private function __construct()
    {
    }

    public static function create(
        int $accountID,
        string $email,
        string $firstName,
        string $lastName,
        bool $isPrincipal = false,
        int $gender = 2
    ) {
        $contact = new self();
        $contact->accountID = $accountID;
        $contact->email = $email;
        $contact->firstName = $firstName;
        $contact->lastName = $lastName;
        $contact->isPrincipal = $isPrincipal;
        $contact->gender = $gender;

        return $contact;
    }

    public static function forInvoice(
        string $email,
        bool $isPrincipal = false
    ) {
        $contact = new self();
        $contact->email = $email;
        $contact->isPrincipal = $isPrincipal;

        return $contact;
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
     * @return Contact
     */
    public function setId(?int $id): Contact
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int|null $code
     * @return Contact
     */
    public function setCode(?int $code): Contact
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountID(): int
    {
        return $this->accountID;
    }

    /**
     * @param int $accountID
     * @return Contact
     */
    public function setAccountID(int $accountID): Contact
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * @return Phone|null
     */
    public function getPhone1(): ?Phone
    {
        return $this->phone1;
    }

    /**
     * @param Phone|null $phone1
     * @return Contact
     */
    public function setPhone1(?Phone $phone1): Contact
    {
        $this->phone1 = $phone1;
        return $this;
    }

    /**
     * @return Phone|null
     */
    public function getMobile(): ?Phone
    {
        return $this->mobile;
    }

    /**
     * @param Phone|null $mobile
     * @return Contact
     */
    public function setMobile(?Phone $mobile): Contact
    {
        $this->mobile = $mobile;
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
     * @return Contact
     */
    public function setEmail(string $email): Contact
    {
        $this->email = $email;
        return $this;
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
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact
    {
        $this->firstName = $firstName;
        return $this;
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
     * @return Contact
     */
    public function setLastName(string $lastName): Contact
    {
        $this->lastName = $lastName;
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
     * @return Contact
     */
    public function setFax(?Phone $fax): Contact
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrincipal(): bool
    {
        return $this->isPrincipal;
    }

    /**
     * @param bool $isPrincipal
     * @return Contact
     */
    public function setIsPrincipal(bool $isPrincipal): Contact
    {
        $this->isPrincipal = $isPrincipal;
        return $this;
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     * @return Contact
     */
    public function setGender(int $gender): Contact
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChargeID(): ?int
    {
        return $this->chargeID;
    }

    /**
     * @param int|null $chargeID
     * @return Contact
     */
    public function setChargeID(?int $chargeID): Contact
    {
        $this->chargeID = $chargeID;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string|null $birthDate
     * @return Contact
     */
    public function setBirthDate(?string $birthDate): Contact
    {
        $this->birthDate = $birthDate;
        return $this;
    }
}
