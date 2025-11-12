<?php

namespace App\Http\Middleware;

use App\Services\MenuService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user() ?? [];

        if ($request->isMethod('get')) {
            $menuService = new MenuService();
            $currentRoute = $request->route()->getName();

            $currentRouteParams = $request->query() ?? [];
            if (!is_array($currentRouteParams)) {
                $currentRouteParams = [];
            }

            if (str_starts_with($currentRoute, 'User.')) {
                $activeRole = 'User';
                $menusForView = $menuService->list_menu('User');
                $userMenus = $menusForView;
            } else {
                $activeRole = session('active_role', $user->akses->akses ?? '');
                $menusForView = $menuService->list_menu('User');

                if (!empty($user->user)) {
                    $menusForView = array_merge($menusForView, $menuService->list_menu('User'));
                }

                $userMenus = $menuService->list_menu('User');
            }

            view()->share([
                'menus' => $menusForView,
                'user_menus' => $userMenus,
                'active_role' => $activeRole
            ]);

            view()->share(
                $menuService::current_menu($menusForView, $currentRoute, $activeRole, $currentRouteParams)
            );
        }

        return $next($request);
    }
}