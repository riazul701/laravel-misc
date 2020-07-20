<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hash;
use DB;

class AdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admins:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $input['name'] = $this->ask('What is your name?');
        $input['email'] = $this->ask('What is your email?');
        $input['password'] = $this->secret('What is the password?');
        $input['password'] = Hash::make($input['password']);

        DB::table('admins')->insert($input);

        $this->info('Admin Create Successfully.');
    }
}
