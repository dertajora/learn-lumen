<?php
 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use App\Model\PDAM\Bimasakti;
 
class ArticleController extends Controller{
 
 
    public function index(){
 
        echo "Hello World";
        $books = Article::all();
        return dd($books);
        $results = app('db')->select("SELECT * FROM books");
        return $results;
 
    }
 
    
 
}