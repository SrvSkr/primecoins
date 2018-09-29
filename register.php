<?php include 'head.php'?>
<?php include 'header.php'?>

<?php $page = "register";?>


<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
               <div class="col-sm-10 property_header">
                   <h2 class="page-header">Create an Account</h2>
                   <span>You can sign up with a social account, or simply fill in your details below</span>
                </div>
                <div class="col-sm-2 property_header-price">
                </div>
            </div>
        </div>

</div>


<div class="container page-main-content reg">
    <div class="row">
        <div class="col-sm-6">
            <h3>Why Should you Register?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum varius rhoncus. Duis mollis, neque vitae euismod varius, diam ligula tempor nunc, placerat consequat neque libero in nulla. Nulla facilisi. Maecenas quam erat, porttitor id purus nec, faucibus accumsan dolor. Sed id mi nulla. Vestibulum mattis tristique lacinia. Proin quis eros massa. Phasellus rhoncus risus ornare malesuada ultrices. Donec magna nisi, facilisis finibus congue id, tempor a velit.</p>
        </div>
        <div class="col-sm-6">
            <div class="register_social">
                <button class="twitter">Sign in with Twitter</button>
                <button class="facebook">Sign in with Facebook</button>
                <button class="linkedin">Sign in with Linkedin</button>
                <button class="google">Sign in with Google</button>
            </div>
            <div class="register_or"><span>OR</span></div>
            <div class="register_signup">
                <form>
                    <label>Your Name</label>
                    <input type="text"/>
                    <label>Email Address</label>
                    <input type="email"/>
                    <label>Confirm Email Address</label>
                    <input type="email"/>
                    <label>Password</label>
                    <input type="password"/>
                    
                    
                    
                </form>
                <a href="/my_profile.php"><button class="register">Create Your Account</button></a>
                <p class="register_login">Already have an account? <a href="/my_profile.php">Log in</a></p>
            </div>
            
        
        </div>
    </div>
</div>



<?php include 'footer.php'?>