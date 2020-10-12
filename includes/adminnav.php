
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Question and Answer</a>
            </div>


            
            <ul class="nav navbar-right top-nav">
                <li><a href="./addques.php">ADD Questions</a></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['email']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>



           <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="index.php" class="active"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <?php if($_SESSION['username'] == 'admin') {
                    ?>
                <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./users.php">View All Users</a>
                            </li>
                            
                        </ul>
                </li>
                    
                            
                    <?php } else { ?>
                    <?php } ?>

                </ul>
            </div>


</nav>