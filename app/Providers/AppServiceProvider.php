<?php

namespace App\Providers;

use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelDesktopNotifier\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(CommandFinished::class, function (CommandFinished $event){
            if ($event->command === 'test') {
                $passed = !$event->exitCode;
                $this->notify($passed);
            }
        });
    }

    public function notify($passed)
    {
        $notification = (new Notification())
        ->setTitle('Transaksi Berhasil')
        ->setBody(
            $passed ?
                    'berhasil melakukan pembayaran' :
                    'pengguna'

        );

        $this->app->make('desktop.notifier')->send($notification);

    }
}
