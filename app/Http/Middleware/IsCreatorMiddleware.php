<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;

class isCreatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, Post $post): Response
    {
        $user = $request->user();
        if (! $user || $user->id !== $post->user_id) {
            abort(403, "Você não é o criador deste post.");
        }
        return $next($request);
    }
}
