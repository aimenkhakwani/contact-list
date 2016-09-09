<?php
    class Contact
    {
        private $name;
        private $number;
        private $address;

        function __construct($name, $number, $address)
        {
            $this->name = $name;
            $this->number = $number;
            $this->address = $address;
        }

        function setName($full_name)
        {
            $this->name = (string) $full_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setNumber($phone_number)
        {
            $this->number = (string) $phone_number;
        }

        function getNumber()
        {
            return $this->number;
        }

        function setAddress($home_address)
        {
            $this->address = (string) $home_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
