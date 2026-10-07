<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {email?}';

    protected $description = 'Buat akun admin tanpa kata sandi default';

    public function handle(): int
    {
        $email = $this->argument('email') ?? $this->ask('Email admin');
        $name = $this->ask('Nama admin');
        $password = $this->secret('Kata sandi (minimal 12 karakter)');
        $confirmation = $this->secret('Ulangi kata sandi');
        $validator = Validator::make(['email' => $email, 'name' => $name, 'password' => $password, 'password_confirmation' => $confirmation], [
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'name' => ['required', 'string', 'max:100'], 'password' => ['required', 'string', 'min:12', 'confirmed'],
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }
        $user = new User;
        $user->forceFill(['name' => $name, 'email' => $email, 'password' => $password, 'is_admin' => true])->save();
        $this->info('Akun admin berhasil dibuat. Login melalui /admin/login.');

        return self::SUCCESS;
    }
}
