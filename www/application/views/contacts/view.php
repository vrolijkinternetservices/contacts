<?php require 'application/views/header.php' ?>
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
        <span>name</span>
        <span><?php echo $this->contact->getName(); ?></span>
      </div>

      <div>
        <span>work</span>
        <span><?php echo $this->contact->getPhoneWork(); ?></span>
      </div>

      <div>
        <span>mobile</span>
        <span><?php echo $this->contact->getPhoneMobile(); ?></span>
        <input type="phone" name="phone_mobile" />
      </div>

      <hr />

      <div>
        <span>work</span>
        <span><?php echo $this->contact->getEmailWork(); ?></span>
      </div>

      <div>
        <span>private</span>
        <span><?php echo $this->contact->getEmailPrivate(); ?></span>
      </div>

      <hr />

      <div>
        <span>home</span>
        <span><?php echo $this->contact->getHome(); ?></span>
      </div>

      <hr />

      <div>
        <span>note</span>
        <span><?php echo $this->contact->getNote(); ?></span>
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
        <a href="/contacts/edit/<?php echo $this->contact->getId(); ?>">
          <img src="/assets/img/edit.png" alt="Edit" />
          <p>edit</p>
        </a>
      </div>
    </div>

</div>
<?php require 'application/views/footer.php' ?>