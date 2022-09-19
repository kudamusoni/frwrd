<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MotivationController extends Controller
{
    public function index()
    {
        // Check if quote exists for today's date
        $quote = Quote::whereDate('created_at', Carbon::today())->first();

        if(!$quote) {
            $quoteRes = Http::get('https://quotes.rest/qod')['contents']['quotes'][0];
            $quoteText = $quoteRes['quote'];
            $author = $quoteRes['author'];


            $quote = new Quote();
            $quote->quote = $quoteText;
            $quote->author = $author;
            $quote->save();
        }

        return view('motivation', [
            'quote' => $quote
        ]);
    }
}
