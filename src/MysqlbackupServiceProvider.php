<?php

namespace Louise93\Mysqlbackup;

use Illuminate\Support\ServiceProvider;

class MysqlbackupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->commands([
            \Louise93\Mysqlbackup\Commands\MysqlbackupCommand::class,
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->commands([
               \Louise93\Mysqlbackup\Commands\MysqlbackupCommand::class,
            ]);
        }
    }
}
