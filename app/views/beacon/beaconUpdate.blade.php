@extends('master')
@section('content')
<div class="body body-s">		
			<form action="" method="post" id="sky-form" class="sky-form">
				<header>Update Beacon Message</header>
				@foreach(  $beacon as $be)
								
				<fieldset>
					<section>
						<label><h2>Beacon Name</h2></label>
						<label class="input">
							<label >{{ $be->beaconName}}</label>
						</label>
					</section>					
					<section>
						<label><h2>Major</h2></label>
						<label class="input">							
							<label name="major">{{ $be->major}}</label>

						</label>
					</section>
					
					<section>
						<label><h2>Minor</h2></label>
						<label class="input">			
							<label >{{ $be->minor}}</label>				
							<input type="hidden" name="minor" value="{{ $be->minor}}" ></input>
						</label>
					</section>
					
					<section>
						<label class="label"><h2>Message 1</h2></label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea  rows="3" name="msg1" id="review" >{{ $be->message1}}</textarea>
						</label>
					</section>
						<label class="label"><h2>Message 2</h2></label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea  rows="3" name="msg2" id="review" >{{ $be->message2}}</textarea>
						</label>
						<input type="hidden" name="userName" value="{{ $be->userName}}" ></input>
						<input type="hidden" name="beaconName" value="{{ $be->beaconName}}" ></input>
					
				</fieldset>
				<footer>
					<button type="submit" class="button button-update" name="update" value="update">Update</button>
					<button type="submit" class="button button-cancle" name="cancel" value="cancel">Cancel</button>

				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your review was successfully sent!</p>
				</div>
				
    		    						
    		    			@endforeach
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
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						review:
						{
							required: true,
							minlength: 20
						},
						quality:
						{
							required: true
						},
						reliability:
						{
							required: true
						},
						overall:
						{
							required: true
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						review:
						{
							required: 'Please enter your review'
						},
						quality:
						{
							required: 'Please rate quality of the product'
						},
						reliability:
						{
							required: 'Please rate reliability of the product'
						},
						overall:
						{
							required: 'Please rate the product'
						}
					},
					
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
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