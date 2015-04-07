<h2>Регистрация</h2>
<?php if($data == "exists") { ?> <div class="alert alert-danger"> Такой email уже занят </div> <?php } ?>
<?php include 'reg_form.html'; ?>