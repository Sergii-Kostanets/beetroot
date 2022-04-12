<?php
namespace App\Models;


/**
 * @Entity
 * @Table(name="users")
 */
class Reg {
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private ?int $id;

    /**
     * @Column(name="login", type="string", length=250, nullable=false)
     */
    private string $login;

    /**
     * @Column(name="password", type="string", length=250, nullable=false)
     */
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getPassword(): string {
        return $this->password;
    }
}