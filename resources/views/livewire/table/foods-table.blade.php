<div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="geex-content__form-title">
                    <h3>Foods</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="geex-content__form-title">
                    <button type="button" wire:click='setFalse' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Foods
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="geex-content__section geex-content__form table-responsive">

        <table class="table-reviews-geex-1">
            <thead>
                <tr style="width: 100%;">
                    <th style="width: 20%;">Name</th>
                    <th style="width: 20%;">category</th>
                    <th style="width: 20%;">Price</th>
                    <th style="width: 20%;">Desc</th>
                    <th style="width: 20%;">Date Add</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($foods as $food)
                    <tr>
                        <td>
                            <div class="author-area">
                                <p>{{ $food->name }}</p>
                            </div>
                        </td>
                        <td>
                            <span class="designation">{{ $food->category->name }}</span>
                        </td>
                        <td>
                            <span class="designation">{{ $food->price }}</span>
                        </td>
                        <td>
                            <span class="designation">{{ $food->description }}</span>
                        </td>
                        <td>
                            <span class="designation">{{ $food->created_at }}</span>
                        </td>
                        <td>
                            <span class="name">
                                <button type="button" wire:click="setFood('{{ $food->id }}')"
                                    class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit
                                </button>
                                <button type="button" wire:click="delete('{{ $food->id }}')"
                                    class="btn btn-danger m-1" >
                                    Delete
                                </button>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Food</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="geex-content__form__wrapper__item geex-content__form__right">
                            <div class="geex-content__form__single">
                                <div class="geex-content__form__wrapper__item geex-content__form__right">
                                    <div class="geex-content__form__single">
                                        <p class="geex-content__form__single__label">Category</p>
                                        <div class="geex-content__form__single__box mb-20">
                                            <select class="form-select" wire:model='selectedCat' aria-label="Default select example">
                                               @foreach ($categories as $item)
                                               <option value="{{$item->id}}">{{$item->name}}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                        <h4 class="geex-content__form__single__label">Name</h4>
                                        <div class="geex-content__form__single__box mb-20">
                                            <input placeholder="Insert Category" wire:model='name' class="form-control"
                                                id="geex-input1" />
                                        </div>
                                        <h4 class="geex-content__form__single__label">Price</h4>
                                        <div class="geex-content__form__single__box mb-20">
                                            <input placeholder="Insert Category" wire:model='price' class="form-control"
                                                id="geex-input1" />
                                        </div>
                                        <h4 class="geex-content__form__single__label">Desc</h4>
                                        <div class="geex-content__form__single__box mb-20">
                                            <input placeholder="Insert Category" wire:model='description'
                                                class="form-control" id="geex-input1" />
                                        </div>
                                        <h4 class="geex-content__form__single__label">Stock</h4>
                                        <div class="geex-content__form__single__box mb-20">
                                            <input placeholder="Insert Category" wire:model='quantity'
                                                class="form-control" id="geex-input1" />
                                        </div>
                                        <h4 class="geex-content__form__single__label">Image File</h4>
                                        <div class="geex-content__form__single__box">
                                            <input wire:model='photo' class="form-control" type="file"
                                               required />
                                        </div>
                                    </div>
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
