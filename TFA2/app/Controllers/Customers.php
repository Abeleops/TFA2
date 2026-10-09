<?php 



namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function customers()
{
    // Connect to Customers Database
    $db = \Config\Database::connect('customersDB');

    // Retrieve customers
    $customers = $db->table('customers')
                    ->orderBy('id', 'ASC')
                    ->get()
                    ->getResultArray();

    return view('customers/index', [
        'customers' => $customers
    ]);
}
}