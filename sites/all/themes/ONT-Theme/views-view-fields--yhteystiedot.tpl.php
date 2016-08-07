<div id="profile">
	<div id="profileImage">
		<?php print $fields['field_profile_image'] ->content; ?>
	</div>
	<div id="profileInfo">
		<div class="profile-field"><strong>Nimi: </strong><?php print $fields['field_profile_name'] ->content; ?></div>
		<div class="profile-field"><strong>Tehtävä: </strong><?php print $fields['field_profile_worktitle'] ->content; ?></div>
		<div class="profile-field"><strong>Organisaatio: </strong><?php print $fields['field_profile_organization'] ->content; ?>	</div>
		<div class="profile-field"><strong>Sähköposti: </strong><?php print $fields['field_profile_email'] ->content; ?></div>
		<div class="profile-field"><strong>Puhelin: </strong><?php print $fields['field_profile_phone'] ->content; ?></div>
</div>				
</div>
