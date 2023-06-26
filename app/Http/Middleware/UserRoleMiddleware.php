<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User {
    public $email;
    public $role;

    public function __construct($email, $role)
    {
        $this->email = $email;
        $this->role = $role;
    } 

    public function getUserRole()
    {
        return $this->role;
    }
}

class UserRoleMiddleware
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
        $user = new User('alep@gmail.com', 'mahasiswa');
        if($user->role != 'admin')
        {
            abort('403', 'Anda tak punya akses admin.');
        }
        return $next($request);
    }
}
