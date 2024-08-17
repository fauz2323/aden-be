<div>
    <form wire:submit.prevent="login" class="my-4">
        <x-alert />
        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" required wire:model="email" placeholder="Enter your email">
        </div>

        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" required wire:model='password'
                placeholder="Enter your password">
        </div>
        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit"> Log In </button>
                </div>
            </div>
        </div>
    </form>
</div>
