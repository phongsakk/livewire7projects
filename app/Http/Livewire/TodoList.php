<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount()
    {
        self::selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();
        $this->todoText = '';
        self::selectTodos();
    }

    public function toggleTodo(int $id)
    {
        $todo = TodoItem::find($id);
        if (!$todo) {
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->update();
        self::selectTodos();
    }

    public function deleteTodo(int $id)
    {
        $todo = TodoItem::find($id);
        if (!$todo) {
            return;
        }
        $todo->delete();
        self::selectTodos();
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }
}
