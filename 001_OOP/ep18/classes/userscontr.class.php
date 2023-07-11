<?php
/**
 * Updates | Inserts and more
 */
class UsersContr extends Users{
    /**
     * This will be called on index
     */
    public function createUser($firstname, $lastname, $dob) {
        $this->setUser($firstname, $lastname, $dob);
    }
}