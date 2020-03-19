<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class TaskController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home', [

        ]);
    }
}
