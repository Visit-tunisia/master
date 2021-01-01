<?php
include('../../Controller/ContrNewsLetter.php');
include_once "../../Model/NewsLetter.php";
if(isset($_POST['Submit']))
{
	
	 $NewsLetterC = new NewsLetterC();
	 $Newsc=new NewsLetter($_POST['Email']);
	 $NewsLetterC->ajouterNewsLetter($Newsc);
}



?>




<div class="inner" style="width: 50%; margin-left: 10%;">

<form method="post" action="">
									<div class="fields">
										<h4>Subscribe for our News letter !</h4>
										<div class="field">
											<label for="message">Email</label>
											<input type="email" name="Email">
										</div>
									</div>
									<button class="btn btn-primary" type="Submit"  name="Submit" >submit</button>
								</form>
</div>