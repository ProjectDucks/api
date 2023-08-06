<?php

namespace App\Console\Commands;

use App\Models\Users\UserModel;
use Illuminate\Console\Command;

class UpdateUserPassword extends Command
{
    protected $signature = 'user:updatePassword {id : The id of the user}';

    protected $description = 'Create a new user';

    public function handle()
    {
        $id = $this->argument('id');
        $user = UserModel::findOrFail($id);
        $user->password = $this->secret('What is the password?');
        $user->save();

        $this->info('User updated correctly!');
    }
}