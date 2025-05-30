<?php
class User
{
    private $email;
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email address.";
        }
    }
    public function getEmail()
    {
        return $this->email;
    }
}

// Usage
$user = new User();
$user->setEmail("abdurazakm@gmail.com");
echo $user->getEmail(); // Outputs: 
