<div class="ui main container">

<h2 class="ui dividing header"><?php echo $this->row['title']; ?></h2><br><br>

<div class="description"><h3> <?php echo wordwrap($this->row['content'], 200, "<br />\n"); ?></h3></div><br>

<h5><?php echo $this->row['created_at']; ?></h5>

</div>