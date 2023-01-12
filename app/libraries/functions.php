<?php

function notification(){
    if(isset($_SESSION['notif'])){
        echo "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire(
                'Success!',
                '".$_SESSION['notif']."',
                'success'
            );
        </script>";
        unset($_SESSION['notif']);
    }
}

?>