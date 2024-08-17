<form id="signInForm" wire:submit.prevent='login' class="geex-content__authentication__form">
    <x-alert />
    <h2 class="geex-content__authentication__title">Sing In to Your Account 👋</h2>
    <div class="geex-content__authentication__form-group">
        <label for="emailSignIn">Your Email</label>
        <input type="email" wire:model='email' placeholder="Enter Your Email" required>
        <i class="uil-envelope"></i>
    </div>
    <div class="geex-content__authentication__form-group">
        <div class="geex-content__authentication__label-wrapper">
            <label for="loginPassword">Your Password</label>
            <a href="forgot-password.html">Forgot Password?</a>
        </div>
        <input type="password" wire:model='password' placeholder="Password" required>
        <i class="uil-eye toggle-password-type"></i>
    </div>
    <div class="geex-content__authentication__form-group custom-checkbox">
        <input type="checkbox" class="geex-content__authentication__checkbox-input" id="rememberMe">
        <label class="geex-content__authentication__checkbox-label" for="rememberMe">Remember Me</label>
    </div>
    <button type="submit" class="geex-content__authentication__form-submit">Sign In</button>
</form>
