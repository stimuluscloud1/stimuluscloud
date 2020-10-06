<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $keywords;
    public $description;
    public $author; 
    public function __construct($title, $keywords, $description, $author)
    {
        $this->title=$title;
        $this->keywords= $keywords;
        $this->description= $description;
        $this->author=$author; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
