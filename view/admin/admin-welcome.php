<?php 
@include_once 'config/functions.php';
$user = getUser()["user_name"];
?>   
            <div class="welcome">Witaj <?php echo $user ?>!</div>
        </div>
    </main>
</body>