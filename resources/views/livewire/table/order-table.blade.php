<div class="col-xl">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <div class="row">
                <div class="col">
                    <h4 class="fs-18 fw-semibold m-0">Order</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Order List</h5>
            <select wire:model.live.debounce.200ms="filter">
                <option value="all">All</option>
                <option value="paid">paid</option>
                <option value="processing">processing</option>
                <option value="completed">completed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Food Order</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $item->user->name }}
                                </td>
                                <td>
                                   @foreach ($item->orderList as $food)
                                       -{{ $food->food->name}} ({{ $food->quantity }}) <br>
                                   @endforeach
                                </td>
                                <td>
                                   Rp. {{ number_format($item->total_price) }}
                                </td>
                                <td>
                                    {{ $item->status }}
                                </td>
                                <td>
                                    {{ $item->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td>
                                    @if ($item->status !='pending' && $item->status !='cancelled' && $item->status !='completed')
                                    <button class="btn btn-primary" wire:click="confirmOrder('{{ $item->id }}')">
                                        Submit Order
                                    </button>
                                    <button class="btn btn-danger" wire:click="cancelOrder('{{ $item->id }}')">
                                        Cancel Order
                                    </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@push('script')
    {{-- <script>
        window.addEventListener('closeModal', event => {
            console.log('closeModal');
            $('#exampleModal').modal('hide');
        });
    </script> --}}
@endpush
