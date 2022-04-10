<h1>Register</h1>
<form action="/register" method="post">
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input"
                   type="text"
                   name="name"
                   placeholder="Name">
        </div>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger"
                   type="email"
                   name="email"
                   placeholder="Email">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
        </div>
        <p class="help is-danger">This email is invalid</p>
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

    <div class="field">
        <label class="label">Password repeat</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger"
                   type="password"
                   name="passwordConfirm"
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
            <button class="button is-link" type="submit">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>
</form>

