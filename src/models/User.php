<?php

class User {
    public function getUserById($id) {
        // Sample user data; in a real application, this would come from the database.
        return [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ];
    }
}
?>
