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

      <a class="toggle-favorite" href="#" onclick="javascript:toggle_favorite(<?php echo $this->contact->getId(); ?>);">
        <?php $favorite_state = 'untoggled'; ?>
        <?php if ($this->contact->getFavorite()) : ?>
          <?php $favorite_state = 'toggled'; ?>
        <?php endif; ?>
        <img id="toggle-favorite-icon" class="icon" src="/assets/img/favorite-<?php echo $favorite_state; ?>.svg" alt="Favorite <?php echo $favorite_state; ?>" />
      </a>

      <div>
        <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $this->contact->getName(); ?>" required />
      </div>

      <div>
        <label for="phone_work">work</label>
        <input type="phone" name="phone_work" value="<?php echo $this->contact->getPhoneWork(); ?>" />
      </div>

      <div>
        <label for="phone_mobile">mobile</label>
        <input type="phone" name="phone_mobile" value="<?php echo $this->contact->getPhoneMobile(); ?>" />
      </div>

      <hr />

      <div>
        <label for="email_work">work</label>
        <input type="email" name="email_work" value="<?php echo $this->contact->getEmailWork(); ?>" />
      </div>

      <div>
        <label for="email_private">private</label>
        <input type="email" name="email_private" value="<?php echo $this->contact->getEmailPrivate(); ?>" />
      </div>

      <hr />

      <div>
        <label for="home">home</label>
        <textarea name="home"><?php echo $this->contact->getHome(); ?></textarea>
      </div>

      <hr />

      <div>
        <label for="note">note</label>
        <textarea name="note"<?php echo $this->contact->getNote(); ?>></textarea>
      </div>
    </div>

    <div class="bottom-bar contains-icon">

      <div>
        <a href="/contacts/delete/<?php echo $this->contact->getId(); ?>" onclick="return confirm('Are you sure?')">
          <img src="/assets/img/delete.png" alt="Delete" />
          <p>delete</p>
        </a>
      </div>
      <div>
        <input type="image" src="/assets/img/save.png" />
        <input type="submit" name="submit" value="save" />
      </div>
    </div>

</div>
</form>
<?php require 'application/views/footer.php' ?>