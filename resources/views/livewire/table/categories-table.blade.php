<div class="col-xl">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <div class="row">
                <div class="col">
                    <h4 class="fs-18 fw-semibold m-0">Category</h4>
                </div>
                <div class="col d-flex flex-row-reverse bd-highlight">
                    <button type="button" wire:click='setFalse' class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add Category
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
                            <th scope="col">Category Name</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <button type="button" wire:click="setCat('{{ $category->id }}')"
                                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit Category
                                    </button>
                                    <button wire:click="delete({{ $category->id }})" class="btn btn-danger">Delete
                                        Category</button>
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
                            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                            <input type="text" class="form-control" wire:model='name'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" class="form-control" wire:model='photo'>
                        </div>
                    </div>
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
