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
					<div class="contact-form cf-form-container recaptcha-form">
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<script>function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);</script>
					<h3>It would be our pleasure to speak with you.</h3>
					<p>Thank you for your interest in The Ritz-Carlton Leadership Center.</p>
					<p>For additional information or to speak with one of our Ladies or Gentlemen, <a href="mailto:leadershipcenter@ritzcarlton.com"><strong>please contact us</strong></a> and we would be delighted to learn more about your goals.</p>
					<p>To provide additional detail or questions, you may also contact us by phone: 301.380.9570. Our mailing address is: The Ritz-Carlton Leadership Center, 10400 Fernwood Road, 117K, Bethesda, MD, 20817.</p>
					<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"><input name="captcha_settings" type="hidden" value='{"keyname":"reCaptcha","fallback":"true","orgId":"00D61000000dOgr","ts":""}'><input name="oid" type="hidden" value="00D61000000dOgr"><input name="retURL" type="hidden" value="http://ritzcarltonleadershipcenter.com/thank-you"><!--input type="hidden" name="debug" value="1"><input type="hidden" name="debugEmail" value="dkilcoyne@gmail.com"-->
						<div class="col-md-6">
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="salutation">Salutation</label>
									<div class="select-option">
									<select id="salutation" name="salutation"><option value="">--None--</option><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option><option value="Mrs.">Mrs.</option><option value="Dr.">Dr.</option><option value="Prof.">Prof.</option></select>
									</div>
								</div>
							</div>
						</div>
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="first_name">First Name</label> 
									<input class="form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text" required="true">
								</div>
							</div>
						</div>
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="last_name">Last Name</label>
									<input class="form-control" id="last_name" maxlength="80" name="last_name" size="20" type="text" required="true">
								</div>
							</div>
						</div>
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="title">Title</label> 
									<input class="form-control" id="title" maxlength="40" name="title" size="20" type="text">
								</div>
							</div>
							</div>
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="company">Company</label> 
									<input class="form-control" id="company" maxlength="40" name="company" size="20" type="text" required="true">
								</div>
							</div>
						</div>	
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control" id="email" maxlength="80" name="email" size="20" type="text" required="true">
								</div>
							</div>
						</div>											
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input class="form-control" id="phone" maxlength="40" name="phone" size="20" type="text">
								</div>
							</div>
						</div>	
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="street">Street</label>
									<textarea class="form-control" name="street"></textarea>
									<textarea class="form-control" name="street"></textarea>
									<textarea class="form-control" name="street"></textarea>
									<textarea class="form-control" name="street"></textarea>
								</div>
							</div>
						</div>	
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="city">City</label>
									<input class="form-control" id="city" maxlength="40" name="city" size="20" type="text">
								</div>
							</div>
						</div>
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="state">State/Province</label>
									<input class="form-control" id="state" maxlength="20" name="state" size="20" type="text">
								</div>
							</div>
						</div>	
						<div class="side-spacer">
							<div class="field-outer">
								<div class="form-group">
									<label for="country">Country</label>
									<input class="form-control" id="country" maxlength="40" name="country" size="20" type="text" required="true">
								</div>
							</div>
						</div>

							
						</div>
						<div class="col-md-6">	
							<div class="side-spacer">
								<div class="field-outer">
								<div class="form-group">
								<div class="select-option">
									<label style="white-space: nowrap;" for="00N6100000HUTOP">What are you interested in learning more about?</label>

									<select id="00N6100000HUTOP" class="form-control" title="Lead Type" name="00N6100000HUTOP" required="true">
									<option value="">--Please Select--</option>
									<option value="Advisory Consulting Services">I am interested in exploring a consulting engagement</option>
									<option value="Onsite Presentations &amp; Facilitation">I am seeking a speaker for one or several meetings or conferences</option>
									<option value="Enrichment Courses &amp; Learning Services">I want to attend a course at a Ritz-Carlton Hotel</option>
									</select>
								</div>
								</div>
								</div>
							</div>
							<div class="side-spacer">
								<div class="field-outer">
								<div class="form-group">
								<div class="select-option">
									<label for="industry">Industry</label>
									
									<select id="industry" name="industry" required="true" class="form-control" >
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
									</select>
								</div>
								</div>
								</div>
							</div>
							<div class="side-spacer">
								<div class="field-outer">
								<div class="form-group">
								<div class="select-option">
									<label for="approximate_number_of_attendees_c">Approximate number of attendees anticipated</label>
									
									<select id="00N6100000IJquk" class="form-control"  title="Approximate Number of Attendees" name="00N6100000IJquk" required="false">
									<option value="">--Please Select--</option>
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
								<div class="field-outer">
								<div class="form-group">
								<div class="select-option">
									<label for="approximate_number_of_attendees_c">Approximate number of attendees anticipated</label>
									
									<select id="00N6100000IJquk" class="form-control"  title="Approximate Number of Attendees" name="00N6100000IJquk" required="false">
									<option value="">--Please Select--</option>
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
								<div class="field-outer">
									<div class="form-group">
										<label for="description">Goals</label>
										<textarea class="form-control" name="description"></textarea>
									</div>
								</div>
							</div>


					<div class="side-spacer">
						<div class="form-group">
							<h3>Employment</h3>
							<p>Please note that all questions about employment at The Ritz-Carlton and The Ritz-Carlton Leadership Center are handled through The Ritz-Carlton <a title="Careers at The Ritz-Carlton" href="http://www.marriott.com/ritz-carlton-careers/default.mi?stop_mobi=yes" target="_blank" rel="noopener noreferrer">Careers</a> website.</p>
						</div>
						</div>
						<div class="col-sm-12">
							<sup style="color: red;">*</sup><font style="color: red;">This confirmation is required</font>
							<div class="g-recaptcha" id="g-recaptcha-response"  data-sitekey="6Lf_B74UAAAAAI3vanaTs-c-0i81Yk8KaRsKsxuf"></div>						
							<div class="form-submt-btn"><input type="submit" name="submit">
							</div>
						</div>
					</div><!-- end -->


				</div>
			</div>
		</div>
			<?php }
		?>
	</section>
<?php endif; ?>
<!-- Slider section -->