<!DOCTYPE html>
<html>

<head>
    <title>Meraki</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/linearicons/Web Font/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div id="main_container">

        <header>
            <div id="info">
                <nav id="nav_sidebar">

                    <span id="menu-icon" onclick="openNav()">
                        <span class="lnr lnr-menu"></span>
                    </span>

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" onclick="closeNav()">
                            <div class="closebtn">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                        <nav>
                            <a href="#">
                                <div class="menu_option">
                                    <span class="lnr lnr-book"></span>
                                    <p>Projects</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="menu_option">
                                    <span class="lnr lnr-file-empty"></span>
                                    <p>Lists</p>
                                </div>
                            </a>
                        </nav>

                        <hr>

                        <div class="tabs">

                            <input id="tab3" type="radio" name="tabs" checked>
                            <label for="tab3">Labels</label>

                            <input id="tab4" type="radio" name="tabs">
                            <label for="tab4">Filters</label>

                            <section id="content3">
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Label</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Label</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Label</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Label</p>
                                </div>
                                <button class="label_button">
                                    <span class="lnr lnr-plus-circle"></span>
                                    <p>Add Label</p>
                                </button>
                            </section>

                            <section id="content4">
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Filter</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Filter</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Filter</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Filter</p>
                                </div>
                                <div class="label_option">
                                    <div class="circle"></div>
                                    <p>Filter</p>
                                </div>
                                <button class="label_button">
                                    <span class="lnr lnr-plus-circle"></span>
                                    <p>Add Filter</p>
                                </button>
                            </section>


                        </div>
                </nav>

                <a href="index.php">
                    <img src="assets/logo.svg">
                </a>
                <h1>
                    <a href="index.php">Meraki</a>
                </h1>

                <nav>

                    <a href="#" id="more-icon">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>

                    <ul>

                        <li>
                            <a href="#" class="current">
                                <div class="plus">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                                <p>Create New</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="lnr lnr-magnifier"></span>
                                <p>Search</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="lnr lnr-cog"></span>
                                <p>Settings</p>
                            </a>
                        </li>

                    </ul>

                </nav>
                </div>
        </header>