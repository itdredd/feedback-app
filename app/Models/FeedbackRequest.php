<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FeedbackRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'subject',
        'message',
    ];

    public static function createFromRequest(Request $request): self
    {
        return self::create([
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
    }
}
