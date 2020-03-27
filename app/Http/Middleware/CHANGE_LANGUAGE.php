<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class CHANGE_LANGUAGE
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $CF_SESSION_LANGUAGE = config('system.SESSION_LANGUAGE');
        $language            = $request->cookie($CF_SESSION_LANGUAGE, config('app.locale'));
        // Lấy dữ liệu lưu trong Session name::website_language, 
        // không có thì trả về default lấy trong config
        //config(['app.locale' => $language]);
        App:: setLocale($language);
        // Chuyển ứng dụng sang ngôn ngữ được chọn

        return $next($request);
    }
}
