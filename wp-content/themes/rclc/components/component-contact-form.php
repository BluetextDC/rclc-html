<!-- Slider section -->
<?php if (get_row_layout() == 'contact_form'): ?>
	<section class="contact-form-section text-center padding-global">
		<?php
			if( get_sub_field('cf_select_form') == 'main_contact_form' ) { ?>
			<div class="container">
				<?php if(get_sub_field('cf_heading')): ?>
					<h2><?php the_sub_field('cf_heading'); ?></h2>
				<?php endif; ?>
				<div class="row">
					<div class="contact-form cf-form-container">
						<script>function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);</script>
<h3>It would be our pleasure to speak with you.</h3>
<p>Thank you for your interest in The Ritz-Carlton Leadership Center.</p>
<p>For additional information or to speak with one of our Ladies or Gentlemen, <a href="mailto:leadershipcenter@ritzcarlton.com"><strong>please contact us</strong></a> and we would be delighted to learn more about your goals.</p>
<p>To provide additional detail or questions, you may also contact us by phone: 301.380.9570. Our mailing address is: The Ritz-Carlton Leadership Center, 10400 Fernwood Road, 117K, Bethesda, MD, 20817.</p>
<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"><input name="captcha_settings" type="hidden" value='{"keyname":"reCaptcha","fallback":"true","orgId":"00D61000000dOgr","ts":""}'><input name="oid" type="hidden" value="00D61000000dOgr"><input name="retURL" type="hidden" value="http://ritzcarltonleadershipcenter.com/thank-you"><!--input type="hidden" name="debug" value="1"><input type="hidden" name="debugEmail" value="dkilcoyne@gmail.com"--><table>
<table>
	<tbody>
		<tr>
			<td><label for="salutation">Salutation</label></td>
			<td><select id="salutation" name="salutation"><option value="">--None--</option><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option><option value="Mrs.">Mrs.</option><option value="Dr.">Dr.</option><option value="Prof.">Prof.</option></select></td>
		</tr>
		<tr>
			<td><label for="first_name">First Name</label> <sup style="color: red;">*</sup></td>
			<td><input id="first_name" maxlength="40" name="first_name" size="20" type="text" required="true"></td>
		</tr>
		<tr>
			<td><label for="last_name">Last Name</label> <sup style="color: red;">*</sup></td>
			<td><input id="last_name" maxlength="80" name="last_name" size="20" type="text" required="true"></td>
		</tr>
		<tr>
			<td><label for="title">Title</label></td>
			<td><input id="title" maxlength="40" name="title" size="20" type="text"></td>
		</tr>
		<tr>
			<td><label for="company">Company</label> <sup style="color: red;">*</sup></td>
			<td><input id="company" maxlength="40" name="company" size="20" type="text" required="true"></td>
		</tr>
		<tr>
			<td><label for="email">Email</label> <sup style="color: red;">*</sup></td>
			<td><input id="email" maxlength="80" name="email" size="20" type="text" required="true"></td>
		</tr>
		<tr>
			<td><label for="phone">Phone</label></td>
			<td><input id="phone" maxlength="40" name="phone" size="20" type="text"></td>
		</tr>
		<tr>
			<td><label for="street">Street</label></td>
			<td><textarea name="street"></textarea></td>
		</tr>
		<tr>
			<td><label for="city">City</label></td>
			<td><input id="city" maxlength="40" name="city" size="20" type="text"></td>
		</tr>
		<tr>
			<td><label for="state">State/Province</label></td>
			<td><input id="state" maxlength="20" name="state" size="20" type="text"></td>
		</tr>
		<tr>
			<td><label for="country">Country</label> <sup style="color: red;">*</sup></td>
			<td><input id="country" maxlength="40" name="country" size="20" type="text" required="true"></td>
		</tr>
		<tr>
		<td style="width: 235px;"><label style="white-space: nowrap;" for="00N6100000HUTOP">What are you interested in learning more about?</label> <sup style="color: red;">*</sup></td>
			<td><select id="00N6100000HUTOP" style="max-width: 318px;" title="Lead Type" name="00N6100000HUTOP" required="true">
		<option value="">--Please Select--</option>
		<option value="Advisory Consulting Services">I am interested in exploring a consulting engagement</option>
		<option value="Onsite Presentations &amp; Facilitation">I am seeking a speaker for one or several meetings or conferences</option>
		<option value="Enrichment Courses &amp; Learning Services">I want to attend a course at a Ritz-Carlton Hotel</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="industry">Industry</label> <sup style="color: red;">*</sup></td>
		<td><select id="industry" name="industry" required="true">
		<option value="">--Please Select--</option>
		<option value="Aerospace &amp; Defense">Aerospace &amp; Defense</option>
		<option value="Automotive">Automotive</option>
		<option value="Aviation">Aviation &amp; Airlines</option>
		<option value="Consulting &amp; Legal">Consulting &amp; Legal</option>
		<option value="Consumer Goods &amp; Retail">Consumer Goods &amp; Retail</option>
		<option value="Education &amp; Non-Profit">Education, Non-Profit, &amp; Government</option>
		<option value="Entertainment &amp; Media">Entertainment &amp; Media</option>
		<option value="Finance">Finance</option>
		<option value="Healthcare">Healthcare</option>
		<option value="Insurance">Insurance</option>
		<option value="Other">Other</option>
		<option value="Real Estate &amp; Facilities Management">Real Estate &amp; Facilities Management</option>
		<option value="Senior Living &amp; Managed Care">Senior Living &amp; Managed Care</option>
		<option value="Sports &amp; Clubs">Sports &amp; Clubs</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="approximate_number_of_attendees_c">Approximate number of attendees anticipated</label> <sup style="color: red;">*</sup></td>
		<td><select id="00N6100000IJquk" style="width: 150px;" title="Approximate Number of Attendees" name="00N6100000IJquk" required="false">
		<option value="">--Please Select--</option>
		<option value="1">1</option>
		<option value="2-19">2-19</option>
		<option value="20+">20-50</option>
		<option value="51-100">51-100</option>
		<option value="101-200">101-200</option>
		<option value="201-300">201-300</option>
		<option value="300+">300+</option>
		</select></td>
		</tr>
	<tr>
		<td><label for="description">Goals</label></td>
		<td><textarea name="description"></textarea></td>
	</tr>
	<tr>
		<td>
			<sup style="color: red;">*</sup><font style="color: red;">This confirmation is required</font>
			<div class="g-recaptcha" data-sitekey="6Lf_B74UAAAAAI3vanaTs-c-0i81Yk8KaRsKsxuf"></div>
		</td>
		<td><input type="submit" name="submit"></td>
	</tr>
	</tbody>
</table>
<h3>Employment</h3>
<p>Please note that all questions about employment at The Ritz-Carlton and The Ritz-Carlton Leadership Center are handled through The Ritz-Carlton <a title="Careers at The Ritz-Carlton" href="http://www.marriott.com/ritz-carlton-careers/default.mi?stop_mobi=yes" target="_blank" rel="noopener noreferrer">Careers</a> website.</p>
					</div>
				</div>
			</div>
			<?php }

			if( get_sub_field('cf_select_form') == 'course_enrollment_form' ) { ?>
			<div class="container">
				<?php if(get_sub_field('cf_heading')): ?>
					<h2><?php the_sub_field('cf_heading'); ?></h2>
				<?php endif; ?>
				<div class="row">
				<div class="contact-form cf-form-container">
				    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
						<input name="oid" type="hidden" value="00D61000000dOgr">
						<input name="retURL" type="hidden" value="http://ritzcarltonleadershipcenter.com/thank-you/">
						<input name="recordType" type="hidden" value="01261000000SWNH">
							<div class="col-md-6">
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="last_name" class="form-control" maxlength="40" name="first_name" required="true" size="50" type="text" placeholder="First Name" /></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input class="form-control" id="last_name" maxlength="40" name="last_name" required="" size="20" type="text" placeholder="Last Name" /></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="email" class="form-control" maxlength="40" name="email" required="" size="20" type="text"placeholder="Email"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="phone" maxlength="40" name="phone" required="true" size="20" type="text" placeholder="Phone" class="form-control"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="company" maxlength="40" name="company" required="" size="20" type="text" placeholder="Company" class="form-control"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="Title" maxlength="40" name="title" required="" size="20" type="text" placeholder="Company" class="form-control"></div>
							</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="city" maxlength="40" name="city" required="" size="20" type="text" placeholder="City" class="form-control"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="state" maxlength="20" name="state" required="" size="20" type="text" placeholder="State/Province" class="form-control"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group"><input id="country" maxlength="40" name="country" required="" size="20" type="text" placeholder="Country or Region" class="form-control"></div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group">
							<div class="select-option">
								<select id="industry" name="industry" required="" class="form-control">
								<option>--Industry--</option>
								<option value="Automotive">Automotive</option>
								<option value="Aviation">Aviation &amp; Airlines</option>
								<option value="Consulting &amp; Legal">Consulting &amp; Legal</option>
								<option value="Consumer Goods &amp; Retail">Consumer Goods &amp; Retail</option>
								<option value="Education &amp; Non-Profit">Education, Non-Profit, &amp; Government</option>
								<option value="Entertainment &amp; Media">Entertainment &amp; Media</option>
								<option value="Finance">Finance</option>
								<option value="Healthcare">Healthcare</option>
								<option value="Insurance">Insurance</option>
								<option value="Other">Other</option>
								<option value="Real Estate &amp; Facilities Management">Real Estate &amp; Facilities Management</option>
								<option value="Senior Living &amp; Managed Care">Senior Living &amp; Managed Care</option>
								<option value="Sports &amp; Clubs">Sports &amp; Clubs</option>
								</select>
							</div>
							</div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="field-outer">
							<div class="form-group">
								<div class="select-option">
									<select id="00N6100000IJquk" title="Approximate Number of Attendees" name="00N6100000IJquk" class="form-control">
										<option>--Approximate Number of Attendees--</option>
										<option value="1">1</option>
										<option value="2-19">2-19</option>
										<option value="20+">20-50</option>
										<option value="51-100">51-100</option>
										<option value="101-200">101-200</option>
										<option value="201-300">201-300</option>
										<option value="300+">300+</option>
										</select>
								</div>
							</div>
							</div>
							</div>
							<div class="side-spacer">
							<div class="g-recaptcha" data-sitekey="6LeoOLUUAAAAACh00XgVBpSnqQLoBipdcjkUwLF2">&nbsp;</div>
							</div>
							</div>
						<div class="col-sm-12">
						<div class="form-submt-btn"><input class="button" name="submit" type="submit" /></div>
						</div>
					</form>
				</div>
			</div>
		</div>
			<?php }
		?>
	</section>
<?php endif; ?>
<!-- Slider section -->