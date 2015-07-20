@extends('master')
@section('content')	
	<div class="body body-s">		

				
						<form action="" id="sky-form" class="sky-form" method="post" >
					<header>Registration form</header>
					
					<fieldset>					
						<section>
							<label class="label">User Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="userName" placeholder="Username">
								<b class="tooltip tooltip-bottom-right">Needed to enter User Name</b>
							</label>
						</section>
						
						<section>
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" placeholder="Email address">
								<b class="tooltip tooltip-bottom-right">Needed to enter email</b>
							</label>
						</section>
						
						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password" name="password" placeholder="Password" id="password">
								<b class="tooltip tooltip-bottom-right">Don't forget your password</b>
							</label>
						</section>
						
						<section>
							<label class="label">Market Name</label>
							<label class="input">
								<i class="icon-append fa fa-home"></i>
								<input type="text" name="marketName" placeholder="Market Name">
								<b class="tooltip tooltip-bottom-right">Needed to enter Market Name</b>
							</label>
						</section>

						<section>
							<label class="label">Location</label>
							<label class="input">
								<i class="icon-append fa fa-location"></i>
								<input type="text" name="location" placeholder="Location">
								<b class="tooltip tooltip-bottom-right">Needed to enter Market Location</b>
							</label>
						</section>

					</fieldset>
						
					
					<footer>
						<button type="submit" class="button">Submit</button>
						<a href="login" class="button button-cancel">Cancle</a>
					</footer>
				</form>			
			</div>
			
			<script type="text/javascript">
				$(function()
				{
					// Validation		
					$("#sky-form").validate(
					{					
						// Rules for form validation
						rules:
						{
							username:
							{
								required: true
							},
							email:
							{
								required: true,
								email: true
							},
							password:
							{
								required: true,
								minlength: 3,
								maxlength: 20
							},
							marketName:
							{
								required: true,
								
							},
							location:
							{
								required: true
							},
							
						},
						
						
						// Do not change code below
						errorPlacement: function(error, element)
						{
							error.insertAfter(element.parent());
						}
					});
				});			
			</script>
@endsection
