<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
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
        // Danh sách các route không cho admin truy cập
        $blockedRoutes = ['/', 'about'];

        // Kiểm tra nếu user là admin và đang cố truy cập trang bị chặn
        if (session('user.Role') === 'admin' && in_array($request->path(), $blockedRoutes)) {
            return redirect('/admin')->with('error', 'Admin không thể truy cập trang này!');
        }
        return $next($request);
    }
}
