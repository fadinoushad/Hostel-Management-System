<?php include('admin-header.php') ?>

<div class ="container contact-container">

    <h2 style="text-align: center;">Enter the details</h2>
    <br>
    <form action="contact.php contact-form" method="post">
        <div class="row">

            <div class="col-md-8" style="padding-left:400px ;">
            <input type="text" class="form-control student-text" placeholder="User Name"> 
                <input type="text" class="form-control student-text" placeholder="First Name">   
                <input type="text" class="form-control student-text" placeholder="Last Name"> 
                <input type="password" class="form-control student-text" placeholder="Password"> 
                <input type="text" class="form-control student-text" placeholder="Hostel Name"> 
                <input type="text" class="form-control student-text" placeholder="Mobile"> 
            </div>
            <div class="col-md-10" style="padding-left: 540px;">
            <button type="submit" name="contact-button"  class="btn-lg btn-primary" style="margin-top:10px;">Submit</button>
            </div>
        </div>
    </form>

</div>

<?php include('admin-footer.php');