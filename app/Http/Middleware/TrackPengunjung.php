<?php

namespace App\Http\Middleware;

use App\Models\Pengunjung;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackPengunjung
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->routeIs('blog.show')) {
            $blogId = $request->route('blog')->id; 
    
            Pengunjung::create([
                'ip_address' => $request->ip(),
                'pengunjung' => $request->userAgent(),
                'waktu_kunjungan' => now(),
                'blog_id' => $blogId,
            ]);
        }
    
        return $next($request);
    }
}
