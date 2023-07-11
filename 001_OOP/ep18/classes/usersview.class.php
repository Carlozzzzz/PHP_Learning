<?php
/**
 * Fetch data
 */

class UsersView extends Users{
    /**
     * This will be used on your index
     */
    public function showUser($name) {
        $results = $this->getUser($name);
        
        # Display Data
        echo "Full name: " . $results[0]['users_firstname'] . " " . $results[0]['users_lastname'] . '<br>';
        echo "Birth date: " . $results[0]['users_dateofbirth'];
    }
}