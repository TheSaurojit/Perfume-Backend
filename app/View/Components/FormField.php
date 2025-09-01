<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class FormField extends Component
{
    /**
     * Create a new component instance.
     */
    public $type, $label, $name, $id, $placeholder, $options, $required, $value , $matchOnKey ;

    public function __construct($type, $label = '', $name = '' , $id = '', $placeholder = '', $options = [], $required = false, $value = '' , $matchOnKey = true)
    {
        $this->type = $type;
        $this->label = Str::title($label);
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = Str::title($placeholder);
        $this->options = $options;
        $this->required = $required;
        $this->value = $value;
        $this->matchOnKey = $matchOnKey;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-field');
    }
}

