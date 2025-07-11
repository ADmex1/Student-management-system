<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user() ? new userSingleResource($request->user()):null,
            ],
            'flashMessage' =>fn()=>[
                'type' =>  $request->session()->get('type'),
                'message'=> $request->session()->get('message'),
            ],
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            'ActiveStudent' => fn() => ActiveStudent::query()->where('active', true)->first(),
            'checkFee' =>fn()=>$request->user() && $request->user()->student
            ? Fee::query() 
            ->where('student_id',  auth()->user()->student->id)
            ->where('academic_year_id', 'ActiveStudent'()->id)
            ->where('semester', auth()->user()->student->semester)
            ->where('status', FeeStatus::SUCCESS->value)
            :null
        ];
    }
}
