<?php 	$page_title = 'profile';
		include_once 'partials/headers.php';?>

<?php include_once 'resource/utilities.php'; # just for the function of flashMessage()?>
<?php include_once 'resource/Database.php';# for database connection to get the other information of the user, 	?>


<?php include_once 'partials/parseProfile.php' ?>

	<?php if( !isset($_SESSION['username']) ) : ?>

		<!--####################################  IF TRIES TO OPEN WITH PATH   ###########################################-->
		<div class="container" align="center" style="padding-top: 20%" >
			<p class="lead">You are not authorized to view this page. Please <a href="login.php">login</a> ,if not a member 					please <a href="signup.php">signup</a>! </p>
			<p class="lead">HACK US !  and please give us <a href="feedback.php">feedback</a>  on our security! </p>
		</div>
		<!--####################################  IF TRIES TO OPEN WITH PATH   ###########################################-->

	<?php else : ?>
	<!-- ======================================= HTML for loged in user STARTS ========================================= -->
		<div class="container" style="border: 2px solid red">
			<h1>Profile</h1><hr>

			<section class="col col-lg-7" style="border: 5px dotted  blue"><!--this section is to hold the coverpage and the profile pic of the user-->
				<div style="border: 1px solid green">
					<span>jflaksjfkljslklsfslk</span> 
				</div>
			</section>

			</br></br></br>

			<section class="col col-lg-7" style="border: 5px dotted green">
				<div class="container">
					<table border="1px">
						<tr>
							<th>id:</th>	<td><?php  echo $id ?></td>
						</tr>
						<tr>
							<th>Username:</th>	<td><?php  echo $username ?></td>
						</tr>
						<tr>
							<th>E-mail:</th>	<td><?php  echo $email ?></td>
						</tr>
						<tr>
							<th>Join date:</th>	<td><?php  echo $join_date ?></td>
						</tr>
						<tr>
							<th>last Active:</th>
							<td><?php  echo $lastActive ?>--> this is in timestamp <?php echo dateTime1($lastActive); ?></td>
						</tr>
						<tr>
							<th>Finger Print:</th>	<td><?php  echo $fingerprint ?></td>
						</tr>
						<tr>
							<th>time You Loged In:</th>
							<td><?php  echo $timeYouLogedIn  ?>	---> <?php echo dateTime2($timeYouLogedIn); ?></td>
						</tr>
						<tr>
							<th></th>
							<td><a  href = "edit_profile.php?user_id=<?php if( isset($encodedId) )  echo $encodedId; ?>"  				class=" glyphicon glyphicon-edit pull-right">edit profile</a></td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		<!-- ============================================ END of HTML part ===============================================-->
<?php endif  ?>


<?php include_once 'partials/footers.php'; ?>