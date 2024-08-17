<?php

namespace App\Livewire\Table;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class CategoriesTable extends Component
{
    use WithPagination,WithFileUploads;
    public $name,$photo,$dataCat;
    public function render()
    {
        return view('livewire.table.categories-table',[
            'categories' => \App\Models\Category::paginate(20),
        ]);
    }

    public function setCat($id) {
        $this->dataCat = Category::find($id);
        $this->name = $this->dataCat->name;
    }

    public function submit() {
        $this->validate([
            'name' => 'required',
        ]);

        $uuid = Uuid::uuid4()->toString();

        $data = new Category();
        $data->name = $this->name;
        $data->slug = Str::slug($this->name);
       if ($this->photo) {
        $this->photo->storeAs('photos', $uuid.'.'.$this->photo->extension());
        $data->icon = $uuid.'.'.$this->photo->extension()??'-';
       }
        $data->save();
        $this->reset();

        $this->dispatch('closeModal');
    }
}
