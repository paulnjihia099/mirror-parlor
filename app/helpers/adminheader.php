<div>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
                        <div class="navbar-brand">
                            <a style="font-weight: bold; text-decoration: none;color: black;" href="<?php echo BASE_URL . '/admin/admin.php' ?>">THE <span style="color: purple;">MIRROR</span> PARLOR</a>  </div>
                        </div>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-items" aria-controls="nav-items" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class=" collapse navbar-collapse" id="nav-items">
                            <ul class="navbar-nav ms-auto pr-5">
                                <li class="active item px-3"><a href="<?php echo BASE_URL . '/index.php' ?>" style="text-decoration: none;" class="text-white">HOME</a></li>
                                <li class="item active px-3"><span class='text-white'><i class="fa-solid fa-user"></i><?php echo $_SESSION['username'] ?></span></li>
                                
                            </ul>
                        </div>
                    </div>
    </nav>
</div>

