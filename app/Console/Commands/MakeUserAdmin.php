<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:make-admin {email : Email do usuário}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Torna um usuário admin pelo email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            $this->error("Usuário com email '{$email}' não encontrado!");
            return 1;
        }
        
        if ($user->is_admin) {
            $this->warn("Usuário '{$user->name}' já é admin!");
            return 0;
        }
        
        $user->is_admin = true;
        $user->save();
        
        $this->info("✅ Usuário '{$user->name}' agora é ADMIN!");
        $this->line("Email: {$user->email}");
        
        return 0;
    }
}
