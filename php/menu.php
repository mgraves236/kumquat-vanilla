<header>
    <nav>
        <div id = "menuToggle">
            <input type = "checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <img src="img/vertical_dark.svg">
                <div id="list">
                    <li><a href = "index.php" class="<?php  echo ($name == 'index') ? 'active' : '';?>">Home</a></li>
                    <li><a href = "registration.php" class="<?php  echo ($name == 'register') ? 'active' : '';?>">Registration</a></li>
                    <li><a href = "schedule.php" class="<?php  echo ($name == 'schedule') ? 'active' : '';?>">Schedule</a></li>
                    <li><a href = "guests.php" class="<?php  echo ($name == 'guests') ? 'active' : '';?>">Guests</a></li>
                    <li><a href = "jury.php" class="<?php  echo ($name == 'jury') ? 'active' : '';?>">Jury</a></li>
                    <li><a href = "orgnpart.php" class="<?php  echo ($name == 'org') ? 'active' : '';?>">Organizers & Partners</a></li>
                </div>
            </ul>
        </div>
    </nav>
</header>
