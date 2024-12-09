<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/users/user-11.jpg"
                            class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">

                        <div class="overflow-hidden ms-4">
                            <h4 class="m-0 text-dark fs-20">Phoenix Baker</h4>
                            <p class="my-1 text-muted fs-16">Passionate Software Engineer Crafting Innovative Solutions
                            </p>
                            <span class="fs-15"><i class="mdi mdi-message me-2 align-middle"></i>Speaks: <span>English
                                    <span
                                        class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">native</span>
                                    , Bitish, Turkish </span></span>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active p-2" id="setting_tab" data-bs-toggle="tab" href="#profile_setting"
                            role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-school"></i></span>
                            <span class="d-none d-sm-block">Setting</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content text-muted bg-white">

                    <div class="tab-pane active pt-4" id="profile_setting" role="tabpanel">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <x-alert />

                                    <div class="card border mb-0">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title mb-0">Change Password</h4>
                                                </div><!--end col-->
                                            </div>
                                        </div>

                                        <form wire:submit.prevent='changePassword'>
                                            <div class="card-body mb-0">
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Old Password</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password"
                                                            placeholder="Old Password" wire:model='old_password'>
                                                        @error('old_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">New Password</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password"
                                                            placeholder="New Password" wire:model='password'>
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Confirm Password</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password"
                                                            placeholder="Confirm Password"
                                                            wire:model='password_confirmation'>
                                                        @error('confirm_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>
                                                    </div>
                                                </div>

                                            </div><!--end card-body-->
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end education -->

                </div> <!-- Tab panes -->
            </div>
        </div>
    </div>
</div>
