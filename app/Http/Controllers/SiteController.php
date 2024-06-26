<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function about(): View
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'about-page')
            ->where('active', '=', 1)
            ->first();

        return view('about', compact('widget'));
    }

    public function agreement(): View
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'agreement-page')
            ->where('active', '=', 1)
            ->first();

        return view('about', compact('widget'));
    }

    public function contact(): View
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'contact-page')
            ->where('active', '=', 1)
            ->first();

        return view('about', compact('widget'));
    }
}
