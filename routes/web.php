<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');


Route::livewire('/', 'pages::web.home')->name('web.home');

Route::livewire('/about', 'pages::web.about')->name('web.about');
Route::livewire('/overview-legality', 'pages::web.overview-legality')->name('web.overviewLegality');
Route::livewire('/vision-mission', 'pages::web.vision-mission')->name('web.visionMission');
Route::livewire('/certification', 'pages::web.certification')->name('web.certification');

Route::livewire('/our-partner', 'pages::web.our-partner')->name('web.ourPartner');
Route::livewire('/our-service', 'pages::web.our-service')->name('web.ourService');

Route::livewire('/industry-sector', 'pages::web.industry-sector')->name('web.industrySector');

Route::livewire('/news-careers', 'pages::web.news-careers')->name('web.newsCareers');

Route::livewire('/news-career-detail/{slug}', 'pages::web.news-career-detail')->name('web.newsCareerDetail');




Route::livewire('/login-new', 'pages::web.login')->name('web.login');


Route::livewire('/contact', 'pages::web.contact')->name('web.contact');

// backend
Route::livewire('/news', 'pages::backend.news')
    ->name('backend.news');

Route::livewire('/news-add', 'pages::backend.news-add')
    ->name('backend.newsAdd');

Route::livewire('/news-edit/{id}', 'pages::backend.news-edit')
    ->name('backend.newsEdit');


  
// midd
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
