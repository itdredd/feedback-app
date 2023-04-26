<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\FeedbackRequest;
use Database\Factories\FeedbackRequestFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class FeedbackController extends Controller
{

    public function send(Request $request) {
        FeedbackRequest::factory()::save($request->input('email'), $request->input('subject'), $request->input('message'));
    }
}
