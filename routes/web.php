<?php


use Illuminate\Support\Facades\Route;
use QuickContact\Http\Controller\ContactFormController;
// use QuickContact\Src\Http\Controller\ContactFormController;
 
Route::middleware("web")->group(function(){
   Route::get("/contact",[ ContactFormController::class,"create"]);
Route::post("/contact",[ContactFormController::class,"storeContact"])->name("submit"); 
Route::middleware("auth:admin");
Route::get("/quires",[ContactFormController::class,"showMessages"]);
Route::get("/message/{contactSubmission}",[ContactFormController::class,"showMessage"])->name("message");
Route::get("reply/{email}",[ContactFormController::class,"sendEmail"])->name("mail");
});
