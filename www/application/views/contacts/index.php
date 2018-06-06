<?php require 'application/views/header.php' ?>
<div id="contacts-overview">
  <div id="contacts-overview-data">
    <?php if (count ($this->contacts) > 0) : ?>
      <?php foreach($this->contacts as $contact) : ?>
      <a href="/contacts/view/<?php echo $contact->getId(); ?>">
        <div class="contact"><p><?php echo htmlentities($contact->getName()); ?></p></div>
      </a>
      <?php endforeach; ?>
    <?php else : ?>
      <div class="message">
        <p>No contacts are matching your criteria</p>
      </div>
    <?php endif; ?>
  </div>

  <div class="bottom-bar bottom-bar-contacts-overview contains-icon">
    <a href="/contacts/add">
      <img class="icon" src="/assets/img/add.svg" alt="Add contact" />
      <p>add contact</p>
    </a>
  </div>
</div>
<?php require 'application/views/footer.php' ?>