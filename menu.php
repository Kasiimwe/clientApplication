<div id = "navbar">
    <nav class = "navbar navbar-default navbar-static-top" role = "navigation">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navbar-collapse-1">
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "#" style = "color:green;">System Menu</a>
        </div>

        <div class = "collapse navbar-collapse" id = "navbar-collapse-1">
            <ul class = "nav navbar-nav">
                <li><a href = "home.php">HOME</a></li>
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">OUR*PRODUCTS<b class = "caret"></b></a>

                    <ul class = "dropdown-menu">
                        <li><a href = "computers.php">Computers</a></li>
                        <li><a href = "spares.php">Computer Spare Parts</a></li>
                        <li><a href = "disks.php">Disks</a></li>
                        <li><a href = "websites.php">Websites</a></li>
                    </ul>
                </li>
                <li><a href = "query.php">INQUIRY/COMPLAINT</a></li>
                <li class = "dropdown"><a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">TRAINING<b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "internship.php">Internship</a></li>
                    </ul>
                </li>
                <a href = "process.php?action=logout" name = "logout">
                    <button type = "button" class = "btn btn-warning"  style = "margin-top:10px; margin-left:500px;color:white;">LOGOUT</button>
                </a>
            </ul>
        </div><!--/.navbar-collapse -->
    </nav>
</div>