<?php

use App\Http\Controllers\AddQuestionAndChoicesController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionChoiceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Speciality\SpecialityController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/sign-in', LoginController::class)->name('login.api');
Route::post('/register', RegisterController::class)->name('register.api');

Route::get('/login', function () {
    return respJson(401, 'Utilisateur doit s\'authentifier', []);
})->name('login');

Route::resource('course', CourseController::class);
Route::resource('lesson', LessonController::class);
Route::resource('specialities', SpecialityController::class);
Route::resource('questions', QuestionController::class);
Route::resource('quiz', QuizController::class);
Route::resource('question_choices', QuestionChoiceController::class);

Route::post('add-question-and-choices', AddQuestionAndChoicesController::class);
