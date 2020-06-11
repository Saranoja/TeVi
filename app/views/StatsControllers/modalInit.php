<?php
function initModal()
{ ?>
    <button onclick="openPopout()" id="menu" class="mobile-menu" type="button"></button>
    <!--Pop-up menu for mobile-->
    <div class="bg-modal">
        <div class="modal-contents">
            <div onclick="closePopout()" class="close">+</div>
            <form action="">
                <ul class="mobile-menu-text">
                    <li><a href="http://localhost/TeVi/public/Home/index">home</a></li>
                    <li><a href="http://localhost/TeVi/public/Stats/index">statistics</a></li>
                    <li><a href="http://localhost/TeVi/public/Resources/index">resources</a></li>
                </ul>
            </form>
        </div>
    </div>
<?php
}
?>