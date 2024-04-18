
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">RAD</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/user/images.png" alt="User image." id="userImage" />
                <span><?= $user['first_name'] . ' ' . $user['last_name']?></span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li>
                        <a href="./dashboard.php"><i class="fa fa-gauge" ></i> <span class="menuIcons">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="./add-staff.php"><i class="fa fa-user-plus"></i> <span class="menuIcons"> Add Staff</span></a>
                    </li>
                      <li>
                        <a href=""><i class="fa fa-calendar"></i> <span class="menuIcons">Schedule</span></a>
                    </li>
                      <li>
                        <a href=""><i class="fa fa-clock-o"></i> <span class="menuIcons">Attendance</span></a>
                    </li>
                      <li>
                        <a href=""><i class="fa fa-user-group"></i> <span class="menuIcons">Manage Costumers</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-person"></i> <span class="menuIcons">Add Trainer</span></a>
                    </li>
                </ul>
            </div>
        </div>