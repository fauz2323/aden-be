@extends('layout.app')

@section('content')
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Category</h4>
            </div>
        </div>

        <livewire:table.foods-table />
    </div>
@endsection
