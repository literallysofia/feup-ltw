<aside>
    <div id="aside_container">
        <nav>
            <a id="projects_menu_option" class="menu_option" href="projects.php">
                <span class="lnr lnr-book"></span>
                <p id="projects_menu_text">Projects</p>
            </a>
            <a id="lists_menu_option" class="menu_option" href="lists.php">
                <span class="lnr lnr-file-empty"></span>
                <p id="lists_menu_text">Lists</p>
            </a>
        </nav>
        <div id="aside_content">
            <hr>
            <section id="labels_section">
                <h2>Labels</h2>

                <?php if($categories !== null) {
                    foreach($categories as $category) { ?>
                <div onclick="searchLabel('<?php echo "color".htmlentities(substr($category['Color'],1))?>')" class="label_option">
                    <div class="circle" style="background: <?php echo htmlentities($category['Color']) ?>"></div>
                    <p><?php echo $category['Name'] ?></p>

                    <?php if ($category['Name'] != 'Default') { ?>
                    <button onclick="openDialog('Delete Label', <?php echo htmlentities($category['ID']) ?>)">
                        <span class="lnr lnr-cross"></span>
                    </button>
                    <?php } ?>
                </div>
                <?php } }?>
            </section>

            <button class="managelabel" onclick="resetSearchLabel()">Reset</button>
            <button class="managelabel" onclick="openDialog('Add Label')">Add Label</button>
        </div>
    </div>
</aside>

<?php
include_once('../templates/dialogs/label.php');
include_once('../templates/dialogs/delete_label.php');
?>