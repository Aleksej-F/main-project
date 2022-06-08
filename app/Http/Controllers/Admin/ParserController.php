<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Contract\Parser;

class ParserController extends Controller
{
    public function __invoke(Request $request, Parser $parser)
    {
        

        dd(
            $parser->setLink('https://news.yandex.ru/music.rss')->parse()
        );

    }
}
