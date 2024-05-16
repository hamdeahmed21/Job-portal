<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();

            if ($request->user()->role === 'company') {
                return redirect()->intended(RouteServiceProvider::COMPANY_DASHBOARD)
                    ->with(['message' => 'Login successful!', 'alert-type' => 'success']);
            } elseif ($request->user()->role === 'candidate') {
                return redirect()->intended(RouteServiceProvider::CANDIDATE_DASHBOARD)
                    ->with(['message' => 'Login successful!', 'alert-type' => 'success']);
            }
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withInput($request->only('email'))
                ->with(['message' => $e->validator->errors()->first(), 'alert-type' => 'error']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')
            ->with(['message' => 'Logged out successfully!', 'alert-type' => 'success']);
    }
}
