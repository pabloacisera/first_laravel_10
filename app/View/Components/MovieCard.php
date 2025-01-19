<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
  public $title;
  public $description;
  public $duration;
  public $poster;
  public $rating;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $duration, $poster, $rating)
    {
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->rating = $rating;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie-card');
    }
}
