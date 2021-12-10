<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao)
    {
        //verificar se o usuario tem acesso a rota
        echo $metodo_autenticacao;

        if($metodo_autenticacao == 'padrao') {
            echo 'Verificar o usuario e senha no banco de dados';
        }
        if(false) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação!!');
        }

    }
}
