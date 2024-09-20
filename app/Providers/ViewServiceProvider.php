<?php

namespace App\Providers;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $userID = Auth::user()->id ?? '';
            $chats = Chat::whereHas('participants', function ($query) use ($userID) {
                $query->where('user_id', $userID);
            })->with('participants')->get();
            $view->with('chats', $chats);
        });
    }
}
