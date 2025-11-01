<?php

namespace Dia2\Models;

class Contact
{
    // Atributos
    private string $name;
    private string $phone;
    private string $email;

    // Constructor
    function __construct(string $name, string $phone, string $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    //  Getters
    public function get_name()
    {
        return $this->name;
    }

    public function get_phone()
    {
        return $this->phone;
    }

    public function get_email()
    {
        return $this->email;
    }

    // Setters

    public function set_name(string $name)
    {
        $this->name = $name;
    }

    public function set_phone(string $phone)
    {
        $this->phone = $phone;
    }

    public function set_email(string $email)
    {
        $this->email = $email;
    }
    

    // Metodos
    public function to_array()
    {
        return [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email
        ];
    }
}
