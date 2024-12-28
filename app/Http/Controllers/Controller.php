<?php


namespace App\Http\Controllers;

use App\Services\GPTService;
use Illuminate\Http\Request;

abstract class Controller
{
    protected $gptService;

    public function __construct(GPTService $gptService)
    {
        $this->gptService = $gptService;
    }

    public function placeOrder(Request $request)
    {
        // Example: Get a response from GPT
        $response = $this->gptService->generateResponse("Tell me a joke");

        // You can now use the response however you want, like displaying it
        return view('order.success', ['response' => $response['choices'][0]['text']]);
    }
    
}
