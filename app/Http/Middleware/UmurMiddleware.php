<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //mengambil nilai yang didefinisikan di umur controller
        $umur = $request->session()->get('umur');

        // kondisi atau aturan jika umurnya >= 18 tahun
        if($umur >= 18)
        {
            return $next($request); //melanjutkan ke route yang dituju.
        }

        // handle kalau umur < 18
        return back()->with('gagal', 'Umur kamu belum memenuhi syarat.');


    }
}
