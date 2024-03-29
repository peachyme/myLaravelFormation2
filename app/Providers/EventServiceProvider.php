<?php

namespace App\Providers;

use App\Events\PostCreatedEvent;
use App\Events\UserCreatingEvent;
use App\Listeners\PostCreatedListener;
use App\Listeners\UserCreatingListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        PostCreatedEvent::class => [
            PostCreatedListener::class,
        ],

        UserCreatingEvent::class => [
            UserCreatingListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
