<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class asidenew extends Component
{
    /**
     * Create a new component instance.
     */
    public $recentPosts;
    public $categories;
    public function __construct()
    {
        $this->recentPosts = Post::inRandomOrder()->take(3)->get();
        $this->categories = Category::take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return  view('components.asidenew', [
            'recentPosts' => $this->recentPosts,
            'categories' => $this->categories,
        ]);
    }
}
