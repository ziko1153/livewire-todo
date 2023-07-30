<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public $todos = [];
    public $task = '';
    public $editMode = false;
    public $editIndex = null;


    public function mount()
    {
        $this->todos = ['Tahmid Ziko', 'Test1', 'Test3'];
    }

    public function addTodo()
    {
        if (!empty($this->task)) {
            array_push($this->todos, $this->task);
            $this->task = '';
        }
    }

    public function startEditing($index)
    {
        $this->editMode = !$this->editMode;
        $this->editIndex = $index;
    }

    public function editTodo($index)
    {

        $this->editMode = !$this->editMode;
    }


    public function removeTodo($index)
    {
        array_splice($this->todos, $index, 1);
    }



    public function render()
    {
        return view('livewire.todo');
    }
}
