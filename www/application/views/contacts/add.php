<?php require 'application/views/header.php' ?>
<?php if (!empty($this->error_message)) { ?>
  <p color="red"><?php echo $this->error_message; ?></p>
<?php } ?>
<form method="post">
<div id="contact-details">

    <div class="message mobile-only">
      <a href="/contacts">&lt; back to contacts overview</a>
    </div>

    <div id="contact-details-data">

      <div>
        <label for="name">name</label>
        <input type="text" name="name" required />
      </div>

      <div>
        <label for="phone_work">work</label>
        <input type="phone" name="phone_work" />
      </div>

      <div>
        <label for="phone_mobile">mobile</label>
        <input type="phone" name="phone_mobile" />
      </div>

      <hr />

      <div>
        <label for="email_work">work</label>
        <input type="email" name="email_work" />
      </div>

      <div>
        <label for="email_private">private</label>
        <input type="email" name="email_private" />
      </div>

      <hr />

      <div>
        <label for="home">home</label>
        <textarea name="home"></textarea>
      </div>

      <hr />

      <div>
        <label for="note">note</label>
        <textarea name="note"></textarea>
      </div>
    </div>

    <div class="bottom-bar contains-icon">
      <div>
      <input type="image" src="/assets/img/save.png" />
      <input type="submit" name="submit" value="save" />
      </div>
    </div>

</div>
</form>
<?php require 'application/views/footer.php' ?>