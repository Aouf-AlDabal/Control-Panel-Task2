<?php include "includes/header.php"; ?>
<div class="hole">
    <section>
        <img src="https://s-m.com.sa/images/logo.png" alt="no image" />
        <h1 class="font-weight-bold w-auto p-3 mb-4 bg-white text-dark" role="alert">Control Panel</h1>
        <h3 class="text-primary   font-weight-bold mb-2 bg-gradient-dark">
            <?php ReadData() ?></h3>
        <h3 class="text-danger  font-weight-bold mb-2 bg-gradient-dark">
            <?php stop() ?></h3>

    </section>
    <button name="stop" type="submit" class="btn  btn-light   btn-circle btn-md mb-4"
        style="font-size: 24px; color: black;">
        <a class="text-dark" href="Control_Panel.html">
            <i class=" fa fa-arrow-circle-left"></i>
        </a>
    </button>


    <?php include "includes/footer.php"; ?>