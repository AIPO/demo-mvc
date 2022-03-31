<h1>Contact</h1>
<form action="" method="post">
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input"
                   type="text"
                   name="name"
                   placeholder="Text input">
        </div>
    </div>

    <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success"
                   type="text"
                   name="username"
                   placeholder="Username">
            <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
        </div>
        <p class="help is-success">This username is available</p>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger"
                   type="email"
                   name="email"
                   placeholder="Email input">
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
        <label class="label">Message</label>
        <div class="control">
            <textarea class="textarea"
                      name="message"
                      placeholder="Textarea">
            </textarea>
        </div>
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
