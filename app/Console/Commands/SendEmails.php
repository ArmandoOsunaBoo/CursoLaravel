<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Mail\UserWelcome;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:sendemail {id : Es el ID del usuario} {--banderazo : descripcion del banderazo}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hace envio de un email al usuario';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::find($this->argument('id'));
        if($user){
          Mail::to($user->email)->send(new UserWelcome($user));
          echo "Email enviado";
        }else{
          echo "El usuario no existe";
        }

    }
}
