<?php

namespace App\Console\Commands;

use App\Models\Users\UserModel;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'user:create {name : The name of the user} {email : The email address of the user}';

    protected $description = 'Create a new user';

    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->secret('What is the password?');

        UserModel::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        $this->info('User created successfully!');
    }
}
