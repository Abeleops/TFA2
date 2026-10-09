<?php
    namespace App\Controllers;
    
    use App\Models\UserModel;

class Users extends BaseController
{
   public function users()
{
    // Connect to Users Database
    $db = \Config\Database::connect('default');

    // Retrieve users
    $users = $db->table('users')
                ->orderBy('id', 'ASC')
                ->get()
                ->getResultArray();

    return view('users/index', [
        'users' => $users
    ]);
}
}
