<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Schema;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $projects = collect();

        if (Schema::hasTable('projects')) {
            $projects = Project::query()
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
        }

        return view('welcome', compact('projects'));
    }
}
