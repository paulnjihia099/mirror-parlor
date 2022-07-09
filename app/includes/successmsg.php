<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-success" role="alert">
        <li style='list-style:none'><?php echo $_SESSION['message'] ?></li>
    </div>

    <?php
        unset($_SESSION['message'])
    ?>
<?php endif; ?>