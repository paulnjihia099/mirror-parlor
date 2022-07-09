<style>
    nav{
        z-index: 9999999;
    }
</style>


<div class=" w-100 !important">
    <div class="d-flex justify-content-between bg-light py-2 px-2">
        <div class="left"></div>
        <div class="d-flex">
            <?php if(isset($_SESSION['id'])): ?>
                <div class="item px-3"><span class='text-info'><i class="fa-solid fa-user"></i><?php echo $_SESSION['username'] ?></span></div>
                <?php if($_SESSION['admin']): ?>
                    <div class="item px-3"><a href="<?php echo BASE_URL . '/admin/admin.php' ?>" style="text-decoration: none;" class="text-info">Admin</a></div>
                <?php endif; ?>
                <div class="item px-3"><a href="<?php echo BASE_URL . '/logout.php' ?>" style="text-decoration: none;" class="text-info">Logout</a></div>
            <?php else: ?>
                <div class="item px-3"><a href="<?php echo BASE_URL . '/signin.php' ?>" style="text-decoration: none;" class="text-info">Login</a></div>
            <?php endif; ?>
        </div>
    </div>

            <nav class="navbar navbar-expand-lg navbar-light" >
                    <div class="container">
                        <div class="navbar-brand">
                            <a style="font-weight: bold; text-decoration: none;color: black;" href="<?php echo BASE_URL . 'index.php' ?>">THE <span style="color: purple;">MIRROR</span> PARLOR</a>  </div>
                        </div>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-items" aria-controls="nav-items" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class=" collapse navbar-collapse" id="nav-items">
                            <ul class="navbar-nav ms-auto pr-5">
                                <li class="active item px-3"><a href="<?php echo BASE_URL . '/index.php' ?>" style="text-decoration: none;" class="text-white">HOME</a></li>
                                <li class="item px-3"><a href="<?php echo BASE_URL . '/pages/about.php' ?>" style="text-decoration: none;" class="text-white">ABOUT</a></li>
                                <li class="item px-3"><a href="<?php echo BASE_URL . '/pages/shop.php' ?>" style="text-decoration: none;" class="text-white">SHOP</a></li>
                                <li class="item px-3"><a href="<?php echo BASE_URL . '/pages/gallerly.php' ?>" style="text-decoration: none;" class="text-white">GALLERLY</a></li>
                                <li class="item px-3"><a href="<?php echo BASE_URL . '/pages/more.php' ?>" style="text-decoration: none;" class="text-white">MORE</a></li>
                                <li class="dropdown pr-5">
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BOOK
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu bg-primary">
                                        <li class="item pr-2 text-center"><a href="<?php echo BASE_URL . '/pages/customer.php' ?>" style="text-decoration: none;" class="text-white">CUSTOMER</a></li>
                                        <li class="item pr-2 text-center"><a href="<?php echo BASE_URL . '/pages/intern.php' ?>" style="text-decoration: none;" class="text-white">INTERN</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
             </div>