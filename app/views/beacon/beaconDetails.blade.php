@extends('master')
@section('content')
<div class="body body-s">		
			<form action="demo-review-process.php" method="post" id="sky-form" class="sky-form">
				@foreach($beacon as $bea)
				<header>Add Beacon Message</header>
				
				<fieldset>					
					<section>
						<label>Major</label>
						<label class="input">
							<i class="icon-append fa fa-user"></i>
							<label>{{ $bea->major}}</label>
							<input type="hidden" name="lblMajor" value="{{ $bea->major}}"/>
						</label>
					</section>
					
					<section>
						<label>Minor</label>
						<label class="input">
							<i class="icon-append fa fa-envelope-o"></i>
							<label>{{ $bea->minor}}</label>
						</label>
					</section>
					
					<section>
						<label class="label">Message 1</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea readonly rows="3" name="review" id="review" >{{ $bea->message1}}</textarea>
						</label>
					</section>
						<label class="label">Message 2</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea readonly rows="3" name="review" id="review" >{{ $bea->message2}}</textarea>
						</label>
					
				</fieldset>
				<footer>


					<button type="submit" class="button" value="{{$be->message1}}}" >Edit</button>
					<button type="submit" class="button" value="{{$be->message1}}}" >{{$be->message1}}</button>

					<p>
						{{  HTML::linkRoute('beaconHome','Back',array($bea->userName))}}
						{{  HTML::linkRoute('update','Update',array($bea->major))}}
					</p>
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
@stop