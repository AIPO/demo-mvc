<h1>Login</h1>
<form action="">

    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger"
                   type="password"
                   name="password"
                   placeholder="*******">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
        </div>
        <p class="help is-danger">This password is not secure</p>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
        <div class="control">
            <a class="button is-link" href="/register">Register</a>
        </div>
    </div>
</form>
