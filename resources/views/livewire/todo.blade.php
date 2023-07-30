<div>

    <form class="d-flex">
        <input wire:model="task"  class="form-control me-2" type="search" placeholder="Add Todo" aria-label="Search">
        <button class="btn btn-outline-success" wire:click.prevent = "addTodo" type="submit">Add</button>
    </form>
    
    <ol class="list-group list-group-numbered mt-4">

       @foreach ($todos as $index => $todo)
            <li class="list-group-item d-flex justify-content-between align-items-start mb-2">
                   
                @if($editMode && $editIndex == $index)
                    <input wire:model="todos.{{ $index }}"  class="form-control me-2">
                    <span class="badge bg-success rounded-pill" style="cursor: pointer" wire:click="editTodo({{$index}})">Save</span>

                @else
                    <div class="ms-2 me-auto">
                        <div class="fw-bold mx-2">{{$todo}}</div>
                    </div>
                    <span class="badge bg-primary rounded-pill" style="cursor: pointer" wire:click="startEditing({{$index}})">Edit</span>
                    <span class="badge bg-danger rounded-pill mx-2" style="cursor: pointer" wire:click="removeTodo({{$index}})">Delete</span>
                @endif
            </li>
        @endforeach

      </ol>


</div>

