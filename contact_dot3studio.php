<?php $page='contact us';
include("includes/header.php");
include("includes/navigation.php");

?>

<div class="container">
    <div class="h1 text-center text-uppercase font-weight-bold text-dark my-5">Stay with touch</div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="*Your name" class="form-control " required>
                </div>
                <div class="form-group my-5">
                    <input type="email" name="email" placeholder="*Your email" class="form-control " required>
                </div>
                <div class="form-group">
                    <input type="text" name="contact_number" placeholder="*Your contact number" class="form-control " required>
                </div>
                <div class="form-group my-5">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"placeholder="* message" required></textarea>
                </div>
                <div class="text-center">
                
                    <input type="submit" name="send" value="send" class="btn btn-outline-success w-75 my-5">
                
                </div>
            </form>
        </div>
    </div>
</div>





















<?php include("includes/footer.php");?>