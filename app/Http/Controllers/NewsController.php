<?php
namespace App\Http\Controllers;

use App\Events\NewsHidden;
use App\Models\News;

class NewsController extends Controller
{
    public function hideNews($newsId)
    {
        $news = News::find($newsId);

        if ($news) {
            // Вызов события
            NewsHidden::dispatch($news);
            // Дополнительная логика, если нужно
        } else {
            // Обработка ошибки
        }
    }
}
