<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DiscordController extends Controller
{
    public function postMessage(Request $request)
{
    $message = $request->input('message');
    $title = $request->input('title');
    $color = $request->input('color');
    $footer = $request->input('footer');

    if (!empty($message)) {
        $client = new Client();
        $response = $client->request('POST', env('DISCORD_WEBHOOK_SERVER'), [
            'json' => [
                'username' => 'New Interested Family',
                'avatar_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPF1CkqLlGJEj6XcCDkHsJOHDOEigBNGRZIbYu6XAp&s',
                'content' => '<@&1112728982916436058>',
                'embeds' => [
                    [
                        'title' => $title,
                        'description' => $message,
                        'color' => hexdec($color), // Green color code
                        'footer' => [
                            'text' => $footer,
                            'icon_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPF1CkqLlGJEj6XcCDkHsJOHDOEigBNGRZIbYu6XAp&s',
                        ],
                    ],
                ],
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $reason = $response->getReasonPhrase();
        // Do something with $statusCode and $reason
    }
}
}