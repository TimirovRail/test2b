<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;

Route::get('/proposals', [ProposalController::class, 'index']);
Route::post('/proposals', [ProposalController::class, 'store']);
Route::put('/proposals/{id}', [ProposalController::class, 'update']);
Route::get('/proposals/accepted', [ProposalController::class, 'accepted']); 
