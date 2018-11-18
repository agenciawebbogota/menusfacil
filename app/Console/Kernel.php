<?php

namespace App\Console;
use App\Menu;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            Menu::create([
                'user_id' => 100,
                'nombre' => 'Lechugas de pan',
                'descripcion' => 'Tarea Programada desde Crom',
                'precio' => 40000,
                'adicional' => 0,
                'estado'=> 1,
                'imagen' => 'http://res.cloudinary.com/menusfacil/image/upload/v1537344219/menusfacil/htdrzlilkx93ikehylpt.jpg',
            ]);
        })->dailyAt('13:30');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
