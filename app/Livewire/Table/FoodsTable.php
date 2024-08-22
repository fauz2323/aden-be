<?php

namespace App\Livewire\Table;

use App\Models\Category;
use App\Models\Food;
use App\Service\FirebaseServices;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Ramsey\Uuid\Uuid;

class FoodsTable extends Component
{
    use WithPagination, WithFileUploads;
    public $name,
        $selectedCat,
        $description,
        $price,
        $quantity,
        $photo,
        $categories,
        $dataFood,
        $isEdit = false,
        $idFood;

    public function mount()
    {
        $this->selectedCat = Category::first()->id ?? '-';
        $this->categories = Category::all();
    }

    #[On('foodUpdate')]
    public function render()
    {
        return view('livewire.table.foods-table', [
            'foods' => Food::paginate(10),
        ]);
    }

    public function delete($id)
    {
        $data = Food::find($id);
        $data->delete();
        $this->dispatch('foodUpdate');
    }

    public function setFalse()
    {
        $this->isEdit = false;
        $this->reset('name', 'description', 'price', 'quantity');
    }

    public function setFood($id)
    {
        $dataFood = Food::find($id);
        $this->name = $dataFood->name;
        $this->selectedCat = $dataFood->category_id;
        $this->description = $dataFood->description;
        $this->price = $dataFood->price;
        $this->quantity = $dataFood->stock;
        $this->dataFood = $dataFood;
        $this->isEdit = true;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $uuid = Uuid::uuid4()->toString();
        if ($this->isEdit) {
            $data = Food::find($this->dataFood->id);
            $data->category_id = $this->selectedCat;
            $data->name = $this->name;
            $data->description = $this->description;
            $data->price = $this->price;
            $data->stock = $this->quantity;
            $data->status = 'on';
            if ($this->photo) {
                $this->photo->storeAs('photos', $uuid . '.' . $this->photo->extension());
                $imageName = $uuid . '.' . $this->photo->extension();
                $data->image = $imageName;
                $firebaseService = new FirebaseServices();
                $$firebaseService->uploadFile($this->photo, $imageName);
            }
            $data->save();
        } else {
            if (!$this->photo) {
                session()->flash('error', 'Photo is required');
                return;
            }

            $data = new Food();
            $data->category_id = $this->selectedCat;
            $data->uuid = $uuid;
            $data->name = $this->name;
            $data->description = $this->description;
            $data->price = $this->price;
            $data->stock = $this->quantity;
            $data->status = 'on';
            $this->photo->storeAs('photos', $uuid . '.' . $this->photo->extension());
            $imageName = $uuid . '.' . $this->photo->extension();
            $data->image = $imageName;
            $firebaseService = new FirebaseServices();
            $firebaseService->uploadFile($this->photo, $imageName);
            $data->save();
        }

        $this->resetExcept(['selectedCat', 'categories']);

        $this->dispatch('closeModal');
        $this->dispatch('foodUpdate');
    }
}
