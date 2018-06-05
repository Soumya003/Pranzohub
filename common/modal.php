<div class="modal fade bs-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-md-12">
						<div id="myTabContent" class="tab-content">
							<!-- Sign In Tab Starts -->
				            <div class="tab-pane fade active in" id="signin">
				            	<div class="row">
				            		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				                		<h2>Sign In</h2>
				                	</div>
				                	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="padding-top: 10px">
				                		<a class="pull-right" href="#signup" data-toggle="tab">Don,t have an account?</a>
				            		</div>
				            	</div>
				                <br>
				                <span class="text-danger hidden">*Invalid Username or Password</span>
				                <form class="form-horizontal">
				                  <fieldset>
				                    <!-- Sign In Form -->
				                    <!-- Text input-->
				                    <div class="control-group">
				                      <label class="control-label" for="userid">Alias:</label>
				                      <div class="controls">
				                        <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
				                      </div>
				                    </div>
				                    <br>
				                    <!-- Password input-->
				                    <div class="control-group">
				                      <label class="control-label" for="passwordinput">Password:</label>
				                      <div class="controls">
				                        <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
				                      </div>
				                      <div>
				                      <a class="pull-right" href="#" style="margin-top: 5px">Forgot password?</a>
				                    </div>

				                    <!-- Multiple Checkboxes (inline) -->
				                    <div class="control-group">
				                      <label class="control-label" for="rememberme"></label>
				                      <div class="controls">
				                        <label class="checkbox inline" for="rememberme-0">
				                          <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
				                          Remember me
				                        </label>
				                      </div>
				                    </div>

				                    <!-- Button -->
				                    <div class="control-group">
				                      <label class="control-label" for="signin"></label>
				                      <div class="controls">
				                        <a href="#" class="btn theme-btn-dash">Login</a>
				                    </div>
				                  </fieldset>
				                </form>
				            </div>
				            <!-- Sign In Tab Ends -->

				            <!-- Sign Up Tab Starts -->
				            <div class="tab-pane fade" id="signup">
				                <div class="row">
				            		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				                		<h2>Register</h2>
				                	</div>
				                	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="padding-top: 10px;">
				                		<a class="pull-right" href="#signin" data-toggle="tab">Already have an account?</a>
				            		</div>
				            	</div>
				            	<br>				          
				                <form class="form-horizontal">
				                  <fieldset>
				                    <!-- Sign Up Form -->
				                    <!-- Text input-->
				                    <div class="control-group">
				                      <label class="control-label" for="Email">Email:</label>
				                      <div class="controls">
				                        <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
				                      </div>
				                    </div>
				                    <br>
				                    <!-- Text input-->
				                    <div class="control-group">
				                      <label class="control-label" for="userid">Alias:</label>
				                      <div class="controls">
				                        <input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
				                      </div>
				                    </div>
				                    
				                    <!-- Password input-->
				                    <!-- <div class="control-group">
				                      <label class="control-label" for="password">Password:</label>
				                      <div class="controls">
				                        <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
				                        <em>1-8 Characters</em>
				                      </div>
				                    </div> -->
				                    
				                    <!-- Text input-->
				                    <!-- <div class="control-group">
				                      <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
				                      <div class="controls">
				                        <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
				                      </div>
				                    </div> -->
				                    
				                    <!-- Button -->
				                    <div class="control-group">
				                      <label class="control-label" for="confirmsignup"></label>
				                      <div class="controls">
				                        <a href="registration.php" class="btn theme-btn-dash">Register</a>
				                      </div>
				                    </div>
				                  </fieldset>
				                </form>
				            </div>
				            <!-- Sign Up Tab Ends -->
						</div>
					</div>
				</div>

				<div class="row omb_loginOr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<hr class="omb_hrOr">
						<span class="omb_spanOr">or</span>
					</div>
				</div>

				<div class="row omb_socialButtons">
					<h6>Connect With</h6>
					<br>
		    	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
					        <i class="fa fa-facebook visible-xs"></i>
					        
				        </a>
			        </div>
		        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
				        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
					        <i class="fa fa-twitter visible-xs"></i>
					        
				        </a>
			        </div>	
		        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
				        <a href="#" class="btn btn-lg btn-block omb_btn-google" align="center">
					        <i class="fa fa-google-plus visible-xs"></i>
					        
				        </a>
			        </div>	
				</div>

			</div>
		</div>
	</div>
</div>