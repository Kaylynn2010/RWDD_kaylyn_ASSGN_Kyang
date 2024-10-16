<?php

require_once BASE_PATH . '/src/models/User.php';

class UserController {
    public function show($id) {
        $user = new User();
        $userData = $user->getUserById($id);

        // Check if user data was found
        if ($userData) {
            include BASE_PATH . '/src/views/user_view.php';
        } else {
            echo "User not found.";
        }
    }
}
?>

