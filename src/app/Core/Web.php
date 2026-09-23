<?php

namespace App\Core;

use Illuminate\Http\Request;

use function App\Helpers\app;

/**
 * Web管理
 */
class Web
{
    /** 実行 */
    public function exec()
    {
        $router = app('router');

        try {
            $request = Request::create($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
            $response = $router->dispatch($request);

            $html = $response->getContent();

            echo $html;
        } catch (\Throwable $e) {
            echo '<pre>';
            echo htmlspecialchars((string)$e);
            echo '</pre>';
        }
    }
}
