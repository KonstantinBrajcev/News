<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Str;
use App\Events\NewsHidden;

class NewsObserver
{
    public function saving(News $news)
    {
        if (empty($news->slug)) {
            $news->slug = Str::slug($news->title);
        }
    }
    public function deleting(News $news)
    {
        event(new NewsHidden($news));
    }
}
