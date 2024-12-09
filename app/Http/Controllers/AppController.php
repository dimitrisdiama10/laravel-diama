<?php

namespace App\Http\Controllers;

class AppController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function showUser($user_id) {
        $users = [
            [
                'user_id' => 1,
                'first_name' => 'John',
                'last_name'=> 'Doe',
                'email'=> 'johndoe@gmail.com',
            ],
            [
                'user_id' => 2,
                'first_name' => 'Dimitris',
                'last_name'=> 'Diamantidis',
                'email'=> 'dimitrisdiama@gmail.com',
            ],
            [
                'user_id'=> 3,
                'first_name'=> 'Maria',
                'last_name'=> 'Papadopoulou',
                'email'=> 'mpapado@gmail.com',
            ],
        ];

        $data = [];
        foreach ($users as $user) {
            if ($user['user_id'] == $user_id) {
                $data = $user;
            }
        }

        return view('user', $data);
    }

    public function listOfUsers() {
        $data = [
            'users' => [
                [
                    'user_id' => 1,
                    'first_name' => 'John',
                    'last_name'=> 'Doe',
                    'email'=> 'johndoe@gmail.com',
                ],
                [
                    'user_id' => 2,
                    'first_name' => 'Dimitris',
                    'last_name'=> 'Diamantidis',
                    'email'=> 'dimitrisdiama@gmail.com',
                ],
                [
                    'user_id'=> 3,
                    'first_name'=> 'Maria',
                    'last_name'=> 'Papadopoulou',
                    'email'=> 'mpapado@gmail.com',
                ],
            ]
        ];

        return view('users', $data);
    }

}