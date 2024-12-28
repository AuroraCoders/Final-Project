<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GPTService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
    }

    public function generateResponse($prompt)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
            ])->post('https://api.openai.com/v1/completions', [
                'model' => 'gpt-3.5-turbo',  // You can change the model if needed
                'prompt' => $prompt,
                'max_tokens' => 100,  // Adjust tokens
                'temperature' => 0.7,  // Adjust creativity
            ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                // Log if the request fails
                Log::error('Error from GPT API: ' . $response->body());
                throw new \Exception('Error from GPT API: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Error in GPTService: ' . $e->getMessage());
            throw $e;
        }
    }
}
