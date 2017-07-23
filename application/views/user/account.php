<div>
	<?php
		if($this->session->userdata('logged_in')):
			$user_data = array();
			$user_data=$this->session->userdata('logged_in');

		endif;
	?>

	<div class="card">
  <img src="<?=base_url()?>assets\images\profiles\blank.png" alt="<?=$user_data['firstname']?>" style="width:25%">
  <div class="container">
    <h1><?=$user_data['firstname']?> <?=$user_data['lastname']?></h1>
    <p class="title"><?=$user_data['contact']?></p>
    <p>Harvard University</p>
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a> 
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <p><button>Contact</button></p>
  </div>
</div>
</div>