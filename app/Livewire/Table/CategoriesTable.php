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
    use WithPagination, WithFileUploads;
    public $name, $photo, $dataCat, $isEdit = false, $idSelect;
    public function render()
    {
        return view('livewire.table.categories-table', [
            'categories' => \App\Models\Category::paginate(20),
        ]);
    }

    public function setFalse()
    {
        $this->isEdit = false;
    }

    public function delete($id)
    {
        $data = Category::find($id);
        $data->delete();
    }

    public function setCat($id)
    {
        $this->dataCat = Category::find($id);
        $this->idSelect = $id;
        $this->isEdit = true;
        $this->name = $this->dataCat->name;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $uuid = Uuid::uuid4()->toString();

        if ($this->isEdit) {
            $data = Category::find($this->idSelect);
        } else {
            $data = new Category();
        }
        $data->name = $this->name;
        $data->slug = Str::slug($this->name);
        if ($this->photo) {
            $this->photo->storeAs('photos', $uuid . '.' . $this->photo->extension());
            $data->icon = $uuid . '.' . $this->photo->extension() ?? '-';
        }
        $data->save();
        $this->reset();

        $this->dispatch('closeModal');
    }
}
