<?php 
@include_once 'config/functions.php';
$user = getUser()["user_name"];
?>   
            <div class="card p-5">Witaj <?php echo $user ?>!</div>
        </div>
    </main>
</body>