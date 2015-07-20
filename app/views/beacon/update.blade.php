@section('content')
<div class="body body-s">
				<form action="demo-review-process.php" method="post" id="sky-form" class="sky-form">
				
				<header>Update Beacon Message</header>
				
				<fieldset>					
					<section>
						<label>Major</label>
						<label class="input">
							<i class="icon-append fa fa-user"></i>
							<label name="major">{{ $beacon->major}}</label>
						</label>
					</section>
					
					<section>
						<label>Minor</label>
						<label class="input">
							<i class="icon-append fa fa-envelope-o"></i>
							<label >{{ $beacon->minor}}</label>
						</label>
					</section>
					
					<section>
						<label class="label">Message 1</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea  rows="3" name="msg1" id="review" >{{ $beacon->message1}}</textarea>
						</label>
					</section>
						<label class="label">Message 2</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea  rows="3" name="msg2" id="review" >{{ $beacon->message2}}</textarea>
						</label>
					
				</fieldset>
				<footer>
					<button type="submit" class="button">Edit</button>

				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your review was successfully sent!</p>
				</div>
				
				
			</form>	
</div>
@stop
