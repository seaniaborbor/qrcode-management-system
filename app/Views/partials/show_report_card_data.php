<?php 

//Array ( [id] => 5 [institutionId] => 5 [label] => Agm 2023-2024 grade-5 Report Cards [createdBy] => admin@gmail.com [createdAt] => 2023-11-30 12:43:57 [unqId] => GSaAj [groupId] => oGxgV [isverify] => 1 [nameOnCard] => Mark Morses [class] => K-I [promoted_stmt] => Promoted To Next Cla [conduct] => Good [issuedDate] => 2023-11-29 [institutionName] => Grace Assembly of God High School [phone] => 0888610312 [email] => ag@gmail.com [address] => New Georgia Signboard [logo_path] => 1700915814_150ce42477549df2ab04.jpg [about] => Grace Assimbly of God Mission High School is a Minissionary School. This banch of AG is Located in New Georgia Signboard, Monrovia and is a registered member of the Assimbly Mission of God School system. [dateCreated] => 2023-11-25 04:36:54 )

?>

<p class="lead text-center">
	This authenticates that <span class="text-info"><?=$card_info['nameOnCard']?></span>
	<?php 
		if($card_info['promoted_stmt'] == 'Double Promoted' || $card_info['promoted_stmt'] == 'Promoted To Next Class'){
			echo "<span class='text-warning'>HAS  SUCCESSFULLY</span>";
		}else{
			echo "<span class='text-danger'>HAS NOT SUCCESSFULLY </span>";
		}
	?>  completed the work of grade <span class="text-warning"><?=$card_info['class']?></span> and is there fore :  
</p>
<h3 class="text-info text-center"><?=$card_info['promoted_stmt']?></h3>