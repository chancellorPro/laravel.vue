<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'url_data' => [
                [
                    'title' => 'first link',
                    'link'  => 'http://laravel.vue/'
                ],
                [
                    'title' => 'second link',
                    'link'  => 'https://www.youtube.com/watch?v=NNdTljRzPqE&index=5&list=PLD5U-C5KK50X1KcfueA73sGSjBsd8vgVG'
                ]
            ]
        ]);
    }

    public function getJson()
    {
        return [
            [
                'title' => 'first link',
                'link'  => 'http://laravel.vue/'
            ],
            [
                'title' => 'second link',
                'link'  => 'https://www.youtube.com/watch?v=NNdTljRzPqE&index=5&list=PLD5U-C5KK50X1KcfueA73sGSjBsd8vgVG'
            ]
        ];
    }
}
