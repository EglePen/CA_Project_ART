<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class MultiRelationSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(

        public Model $model,

        public Collection|array $relationItems,

        public string $tagName,
 
        public string $optionDisplay = 'name',
  
        public string $relationName = '',

        public string $tagId = '',
    )
    {
        if(!$this->relationName){
            $this->relationName = $this->tagName;
        }
    }

    public function selected($relationItem){
        
        return $this->model->{$this->relationName}->contains($relationItem->id);
    }
    public function render(): View|Closure|string
    {
        return view('components.forms.multi-relation-select');
    }
}
