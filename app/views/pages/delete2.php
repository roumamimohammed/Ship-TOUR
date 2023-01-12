<!doctype html>
<html lang="en">

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
            <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>

            </div>
        </div>
    </div>

</html>