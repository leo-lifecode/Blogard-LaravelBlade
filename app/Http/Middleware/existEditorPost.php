<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class existEditorPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->post);
        $existeditorpost = Post::where('user_id', Auth::user()->id)->where('slug',  $request->post->slug)->first();
        if ($existeditorpost) {
            return $next($request);
        }
    
        return redirect('/')->with('error', 'You do not have permission to access this page.');
    }
}
