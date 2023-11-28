<?php

namespace App\COntrollers;

use CodeIgniter\Controller;

// include("./app/Views/templates/header.php");
// include("./app/Views/templates/footer.php");

class Testing extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Helloo! This is my First CodeIgniter Project',
            'content' => 'Thank you for visiting this webpage. This page serves as an example for my initial CodeIgniter project. The utilization of CodeIgniter, a robust and efficient PHP framework, was employed in the development of this project. CodeIgniter enables the creation of dynamic web applications with ease. I hope this project enhances your comprehension of the fundamental principles of web development using CodeIgniter.'
        ];

        return view('templates/header', $data) .
            view('test_view', $data) .
            view('templates/footer', $data);
    }
}
