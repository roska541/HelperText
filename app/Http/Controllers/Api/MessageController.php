<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MessageController extends Controller
{
    /**
     * @param Request $request
     * @return MessageResource
     */
    public function showMessage(Request $request): MessageResource
    {
        //Validate that the request contains a slug
        $validated = $request->validate([
            'slug' => 'required|string',
        ]);

        //Grab a random message with the slug category
        $message = Messages::whereHas('category', function($q) use ($validated) {
                        $q->where('categories.slug', $validated['slug']);
                    })
                    ->inRandomOrder()
                    ->first();

        if(!$message){
            abort(404, "No messages to display");
        }

        return new MessageResource($message);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        //Validate the data
        $validated = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'message' => 'required|string'
        ]);

        $message = new Messages();
        $message->fill($validated);
        $message->save();

        return response()->json([
            'message' => 'Successfully saved message'
        ], 200);
    }
}
