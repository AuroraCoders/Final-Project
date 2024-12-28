<?php
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    protected $gptService;

    public function __construct(GPTService $gptService)
    {
        $this->gptService = $gptService;
    }

    public function chat(Request $request)
    {
        // Validate input
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $userMessage = $request->input('content');

        try {
            // Call GPTService
            $response = $this->gptService->generateResponse($userMessage);

            // Return the GPT response
            return response()->json($response['choices'][0]['text']);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error communicating with GPT: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Error communicating with GPT.'], 500);
        }
    }
}
