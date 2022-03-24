<?php 



namespace App\Src;


class Email 
{
    private $email;

    public function __construct(string $email) 
    {
        $this->defineEmail($email);
    }

    private function defineEmail(string $email): void 
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException();
        }

        $this->email = $email;
    }

    public function __toString(): string 
    {
        return  $this->email;
    }
}