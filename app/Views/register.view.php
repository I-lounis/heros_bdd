<?php 
require_once(__DIR__ . '/partials/head.php');
?>

<h1 class = "text-center mb-5">Formulaire d'inscription</h1>

<div class = "d-flex justify-content-center">
    <form action = "" method = "">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
        <div class="mb-3">
        <label for="exampleInputpseudo" class="form-label">Pseudo</label>
        <input type="" class="form-control" id="exampleInput">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>