<nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <a href="index.php">
            <img src="img/logo.png">
            </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li<?php if($thisPage == "Index") { echo ' class="active"'; } ?>><a href="index.php">Index</a></li>
                <li<?php if($thisPage == "Output") { echo ' class="active"'; } ?>><a href="output.php">Output</a></li>
            </ul>
        </div>
        
    </nav>