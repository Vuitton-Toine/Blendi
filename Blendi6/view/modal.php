<!-- Login Validation Script For Login Alerts -->
<script src="../js/loginvalidation.js"></script>

<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                Login
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form" name="loginForm" id="loginForm" action="index.php" method="Post">
                      
                  <div class="form-group">
                    <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username"  placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                  </div>    
                <div class="login" align="center">
               
                  <button  type="submit" value="Login" name="login" class="btn btn-info btn-lg">Login</button>
                  <br>
                  
                 <!-- Error Messages should appear here-->
                 <!-- Can't get JS to appear here yet.. -->
 
                </div>
                </form>
                <br>
                <div id="message" class="bg-danger">
                <?php echo $message;?>
                </div>
            </div> 
            </div>
        </div>
                
    </div>
