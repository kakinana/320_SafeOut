<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Exceptions\ErrorException;

class ChatBotController extends Controller
{
    public function sendChat(Request $request)
    {
        try {
            // Ensure that the input from the request is properly retrieved
            $userInput = $request->input('message');

            // Use a supported model, e.g., gpt-3.5-turbo
            $result = OpenAI::completions()->create([
                'max_tokens' => 100, // correct parameter name
                'model' => 'gpt-3.5-turbo', // updated model
                'prompt' => $userInput,
            ]);

            // Generate the response by concatenating the text from all choices
            $response = array_reduce(
                $result->toArray()['choices'],
                fn(string $result, array $choice) => $result . $choice['text'], ""
            );

            // Return the response in JSON format
            return response()->json(['message' => $response]);

        } catch (ErrorException $e) {
            // Handle the quota exceeded error
            return response()->json(['message' => 'You have exceeded your API quota. Please check your plan and billing details.'], 429);
        } catch (\Exception $e) {
            // Handle any other errors
            return response()->json(['message' => 'An error occurred. Please try again later.'], 500);
        }
    }
}
