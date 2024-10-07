<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\News;

class NewsHidden
{
    use Dispatchable, SerializesModels;

    public $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }
}
