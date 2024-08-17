<div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="geex-content__form-title">
                    <h3>Categories</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="geex-content__form-title">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Category
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="geex-content__section geex-content__form table-responsive">

        <table class="table-reviews-geex-1">
            <thead>
                <tr style="width: 100%;">
                    <th style="width: 20%;">Category</th>
                    <th style="width: 20%;">Date Add</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($categories as $category)
                <tr>
                    <td>
                        <div class="author-area">
                            <p>{{ $category->name }}</p>
                        </div>
                    </td>
                    <td>
                        <span class="designation">{{ $category->created_at }}</span>
                    </td>
                    <td>
                        <span class="name">
                            <button type="button" wire:click="setCat({{ $category->id }})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Edit
                            </button>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="geex-content__form__wrapper__item geex-content__form__right">
                            <div class="geex-content__form__single">
                                <h4 class="geex-content__form__single__label">Category</h4>
                                <div class="geex-content__form__single__box mb-20">
                                    <input placeholder="Insert Category" wire:model='name' class="form-control" id="geex-input1" />
                                    <input type="file" class="form-control" wire:model='photo' />
                                </div>
                            </div>
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
            $('#exampleModal').modal('hide');
        });
    </script>
@endpush
