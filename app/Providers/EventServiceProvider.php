<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
// use Illuminate\Support\Facades\Event;
use App\Models\News;
use App\Observers\NewsObserver;
use App\Events\NewsHidden; // Импортируем событие
use App\Listeners\NewsHiddenListener; // Импортируем слушатель

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        NewsHidden::class => [
            NewsHiddenListener::class,
        ],
    ];
    public function boot()
    {
        // News::observe(NewsObserver::class);
        // parent::boot();
        \App\Models\News::observe(\App\Observers\NewsObserver::class);
    }
}
