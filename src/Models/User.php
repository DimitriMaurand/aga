<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class User
{
    private int $Id;
    private string $Nom;
    private string $Prenom;
    private string $Mail;
    private string $Password;
    private bool $Admin = false;

    use Hydratation;


    /**
     * Get the value of Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     */
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     */
    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Mail
     */
    public function getMail(): string
    {
        return $this->Mail;
    }

    /**
     * Set the value of Mail
     */
    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    /**
     * Get the value of Password
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     */
    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of Admin
     */
    public function isAdmin(): bool
    {
        return $this->Admin;
    }

    /**
     * Set the value of Admin
     */
    public function setAdmin(bool $Admin): self
    {
        $this->Admin = $Admin;

        return $this;
    }
}
