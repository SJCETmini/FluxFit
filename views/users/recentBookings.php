
<?php
include '../layout/userLayout.php';
include '../partials/user-nav.php';
include '../partials/user-sidebar.php';
include '../../config.php';

$uid=$_COOKIE['user_id'];

$sql = "SELECT gyms.*
        FROM memberships
        JOIN gyms ON memberships.gym_id = gyms.id
        WHERE memberships.uid = $uid";

$result = mysqli_query($conn, $sql);

?>
<!--
if ($result) {
    // Fetch and display gym details
    while ($gym = mysqli_fetch_assoc($result)) {
        echo "Gym Name: " . $gym['name'] . "<br>";
        // Access other gym details as needed
    }
} else {
    echo "Error: " . mysqli_error($connection);
}
-->


<section id="content">
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Bookings</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Fitness Center</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--{{#each response}}-->

                        <?php

                        if ($result) {
                            while ($gym = mysqli_fetch_assoc($result)) {
                                echo "Gym Name: " . $gym['name'] . "<br>";
                        
                        ?>
    

                        <tr>
                             
                            <td>
                            <?php
                            /*
                                {{!-- <img src="/public/images/user.jpg" class=""> --}}
                                */
                                ?>
                                <p><?php print($gym['name']); ?></p>
                            </td>
                            <!--{{#if expired}}-->
                            <td><a href="/users/my_ticket/?id=<?php print($gym['id']); ?>&ticketGenerated=true" class="btn btn-success">View Ticket</a></td>
                            <!--{{else}}
                            
                            <td><button class="btn btn-danger disabled mb-1">Expired</button></td>

                            {{/if}}
                            -->
<!--
                            <td>
                                {{#if this.review}}
                                <button class="btn btn-secondary disabled">Reviewed</button>
                               {{else}}
<a href="/users/review/?gymid={{this.gymid}}&userid={{this.userid}}&id={{this._id}}" class="btn btn-warning">Write Review</a>                                {{/if}}
                            </td>
                            -->
                        </tr>
<?php
                    }
                        } 

                        ?>
                        
                        
                      <!--  {{/each}} -->
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</section>