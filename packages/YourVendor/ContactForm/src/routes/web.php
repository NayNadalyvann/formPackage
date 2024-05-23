<?php

use YourVendor\ContactForm\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'YourVendor\ContactForm\Http\Controllers', 'middleware' => ['web']], function() {
    Route::get('contact', [ContactFormController::class, 'showForm'])->name('contact.form');
    Route::post('contact', [ContactFormController::class, 'submitForm'])->name('contact.submit');
    Route::get('contact/thank-you', [ContactFormController::class, 'thankYou'])->name('contact.thankyou');
    Route::get('admin/contact-submissions', [ContactFormController::class, 'listSubmissions'])->name('admin.contact.submissions');
});
