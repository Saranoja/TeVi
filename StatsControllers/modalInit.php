<?php
function initModal() { ?>
    <button onclick="openPopout()" id="menu" class="mobile-menu" type="button"></button>
    <!--Pop-up menu for mobile-->
    <div class="bg-modal">
        <div class="modal-contents">

            <div onclick="closePopout()" class="close">+</div>
            <form action="">
                <ul class="mobile-menu-text">
                    <li><a href="HomePage.php">home</a></li>
                    <li><a href="Stats.php">statistics</a></li>
                    <li><a href="Resources.php">resources</a></li>
                </ul>
            </form>
        </div>
    </div>
<?php
}
?>