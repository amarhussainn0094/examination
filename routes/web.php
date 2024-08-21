<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Exam\Terms;


Route::prefix('/exam')->namespace('App\Http\Livewire')->group(function(){
        // route::get('/dashboard','Student\Dashboard')->name('student.dashboard');
        route::get('/','Student\exam\examcenter')->name('student.exam');
        // route::get('/terms','Exam\Terms')->name('student.term');
        

Route::get('/terms/{quiz_id}', Terms::class)->name('student.term');

});
Route::get('/','App\Http\Livewire\Login\login')->name('login.login');
route::get('logout','App\Http\Livewire\Student\Logout')->name('student.logout');
