<!--<script src="assets/jquery/placeholders.min.js"></script>-->
<div class="top">
    <a href="home.php" class="logo">
    	<img src="assets/image/logo.png" />
    </a>
</div>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
       <div class="navbar-header">
          <a href="home.php" class="navbar-brand visible-xs">
            <span>A<big class="x">x</big>elta</span>
          </a>
          <button class="navbar-toggle" data-toggle="navbar-collapse" data-target="#navbar-collapse-1">
            <span class="icon">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </span>
          </button>
          <button class="navbar-toggle" data-toggle="navbar-collapse" data-target="#navbar-collapse-login">
             <span class="glyphicon glyphicon-log-in"></span>
          </button>
       </div>
       <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="home-link hidden-xs">
               <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li class="hidden-xs">
            	<a href="home.php" class="navbar-brand"><span>A<big class="x">x</big>elta</span> </a>
            </li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Products</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                       <a href="AxPlatform.php">Osmosis Platform</a>
                    </li>
                    <li>
                       <a href="AxGateway.php">Osmosis Gateway</a>
                    </li>
                    <li>
                       <a href="AxAcademy.php">IoT Academy</a>
                    </li>
                </ul>
             </li>
             <li>
                <a href="AxPartners.php">Partners</a>
             </li>
             <li>
                <a href="AxCustomers.php">Customers</a>
             </li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Resources</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                       <a href="http://axelta.com/blog" target="_new">Blog</a>
                    </li>
                    <li>
                       <a href="AxWearables.php">About Wearables</a>
                    </li>
                </ul>
             </li>
             <li>
                <a href="AxAboutus.php">About us</a>
             </li>
             <li>
                <a href="AxContact.php">Contact us</a>
             </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li>
                <button class="btn btn-success navbar-btn border" onClick="location.href='http://aws.axelta.com/Registration'" data-placement="bottom" title="Create new account">
                    <span class="glyphicon glyphicon-registration-mark"></span>
                    <span class="">Free Account</span>
                </button>
                <button class="btn btn-danger navbar-btn hidden-xs" data-toggle="navbar-collapse" data-target="#navbar-collapse-login" data-placement="bottom" title="Login">
                    <span class="glyphicon glyphicon-log-in"></span>
                    <span class="m">Login <span class="caret"></span></span>
                </button>
             </li>
          </ul>
       </div>
       <div class="collapse" id="navbar-collapse-login">
            <form class="login-form" id="login-form">
                <span class="user-icon"></span>
                <div class="input-group">
                    <span class="input-group-addon icon-user">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="abc@xyz.com" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon icon-lock">
                        <span class=" glyphicon glyphicon-lock"></span>
                    </span>
                    <input type="password" class="form-control" placeholder="********" />
                </div>
                <button class="submit btn btn-primary">
                    <span class="btn-icon glyphicon glyphicon-log-in"></span>
                    <span class="btn-label">Sign in</span>
                </button>
                <div>
                    <div class="remember-me-link btn-group remember-me-link" data-toggle="buttons">
                        <label class="btn btn-xs btn-default col-xs-12">
                            <input type="checkbox" value="remember-me" id="check" />
                            <span class="glyphicon"></span> 
                            <span>Remember me</span>
                        </label>
                    </div>
                    <a href="#" id="forgot-password-link" class="forgot-password-link btn btn-xs btn-default  pull-right">
                        <span class="glyphicon glyphicon-question-sign"></span>
                        <span>Forgot password?</span>
                    </a>
                    <a class="hide text-center" href="http://aws.axelta.com/Registration">Create free account</a>
               </div>
            </form>
            <form class="forgot-password-form" id="forgot-password-form" style="display:none;">
                  <span class="forgot-password-icon"></span>
                  <div class="alert alert-danger">
                      <p>Please enter your login USER ID / email address, we will send you an email with your password.</p>
                      <span class="caret"></span>
                  </div>
                <div class="form-fields">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="abc@xyz.com" />
                    </div>
                </div>
                <BUTTON class="submit btn btn-danger">
                    <span class="btn-icon glyphicon glyphicon-send"></span>
                    <span class="btn-label">Get Password</span>
                </BUTTON>
                <div class="text-right">
                    <a href="#" id="forgot-password-cancel" class="text-right">Cancel</a>
                </div>
            </form>
       </div>
    </div>
</div>
