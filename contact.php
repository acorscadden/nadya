<?php include('header.php'); ?>

<!-- Start Advanced Gallery Html Containers -->				
<div id="content">
    <h2>Contact</h2>
    <form id="contact" method="post" action="">
        <fieldset>	
            <label for="name">name</label>
            <input type="text" name="name" placeholder="full name" title="enter your name" class="required">
            <label for="email">e-mail</label>
            <input type="email" name="email" placeholder="yourname@domain.com" title="enter your e-mail address" class="required email">
            <label for="website">website</label>
            <input type="url" name="url" placeholder="http://">
            <label for="message">question/comment</label>
            <textarea name="message"></textarea>
            <input type="submit" name="submit" class="button" id="submit" value="send message" />
        </fieldset>
    </form>
</div>
<?php include('footer.php'); ?>
