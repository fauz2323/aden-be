<div class="col-xl">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <div class="row">
                <div class="col">
                    <h4 class="fs-18 fw-semibold m-0">Food</h4>
                </div>
                <div class="col d-flex flex-row-reverse bd-highlight">
                    <button type="button" wire:click='setFalse' class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add Foods
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Category List</h5>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">food Name</th>
                            <th scope="col">food Category</th>
                            <th scope="col">food Price</th>
                            <th scope="col">food Stock</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->category->name }}</td>
                                <td>{{ number_format($food->price) }}</td>
                                <td>{{ $food->stock }}</td>
                                <td>{{ $food->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <button type="button" wire:click="setFood('{{ $food->id }}')"
                                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit Foods
                                    </button>
                                    <button wire:click="delete({{ $food->id }})" class="btn btn-danger">Delete
                                        Foods</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='submit'>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Category</label>
                            <select class="form-select" wire:model='selectedCat' aria-label="Default select example">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Food Name</label>
                            <input type="text" class="form-control" wire:model='name'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Food Price</label>
                            <input type="text" class="form-control" wire:model='price'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Food Desc</label>
                            <input type="text" class="form-control" wire:model='description'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Food Stock</label>
                            <input type="text" class="form-control" wire:model='quantity'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" class="form-control" wire:model='photo'>
                        </div>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            console.log('closeModal');
            $('#exampleModal').modal('hide');
        });
    </script>
@endpush
