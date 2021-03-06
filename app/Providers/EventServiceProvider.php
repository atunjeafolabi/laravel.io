<?php

namespace App\Providers;

use App\Events\ArticleWasApproved;
use App\Events\ReplyWasCreated;
use App\Listeners\SendArticleApprovedNotification;
use App\Listeners\SendNewReplyNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ReplyWasCreated::class => [
            SendNewReplyNotification::class,
        ],
        ArticleWasApproved::class => [
            SendArticleApprovedNotification::class,
        ],
    ];
}
