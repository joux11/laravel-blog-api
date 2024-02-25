<?php

use App\Models\Article;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('articles', function () {
    return Article::all();
});

Route::get('articles/{id}', function ($id) {
    return Article::find($id);
});

Route::post('articles', function (Request $request) {
    return Article::create($request->all());
});

Route::put('articles/{id}', function (Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());
    return $article;
});
Route::delete('articles/{id}', function ($id) {
    Article::find($id)->delete();
    return 204;
});
