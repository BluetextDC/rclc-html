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
					
					<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"><input name="captcha_settings" type="hidden" value='{"keyname":"reCaptcha","fallback":"true","orgId":"00D61000000dOgr","ts":""}'><input name="oid" type="hidden" value="00D61000000dOgr"><input name="retURL" type="hidden" value="http://ritzcarltonleadershipcenter.com/thank-you"><!--input type="hidden" name="debug" value="1"><input type="hidden" name="debugEmail" value="dkilcoyne@gmail.com"-->
						<div class="col-md-6">
							<div class="side-spacer">
								<div class="field-outer">
								<div class="form-group">
									<label for="salutation">Salutation</label>
									<div class="select-option">
										
										<select id="salutation" class="form-control" name="salutation"><option value="">--Salutation--</option><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option><option value="Mrs.">Mrs.</option><option value="Dr.">Dr.</option><option value="Prof.">Prof.</option></select>
									</div>
								</div>
								</div>
							</div>
							
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="first_name">First Name</label> 
										<input class="form-control" placeholder="first name"  id="first_name" maxlength="40" name="first_name" size="20" type="text" required="true">
									</div>
								</div>
							</div>
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="last_name">Last Name</label>
										<input class="form-control" placeholder="last name"  id="last_name" maxlength="80" name="last_name" size="20" type="text" required="true">
									</div>
								</div>
							</div>
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="title">Title</label> 
										<input class="form-control" placeholder="title" id="title" maxlength="40" name="title" size="20" type="text">
									</div>
								</div>
								</div>
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="company">Company</label> 
										<input class="form-control" placeholder="company"  id="company" maxlength="40" name="company" size="20" type="text" required="true">
									</div>
								</div>
							</div>	
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control" placeholder="email"  id="email" maxlength="80" name="email" size="20" type="text" required="true">
									</div>
								</div>
							</div>											
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input class="form-control" placeholder="phone"  id="phone" maxlength="40" name="phone" size="20" type="text">
									</div>
								</div>
							</div>	
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="street">Street</label>
										<input class="form-control" placeholder="street"   name="street"  id="street" maxlength="40" size="20" type="text">
							
									</div>
								</div>
							</div>	
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="city">City</label>
										<input class="form-control" placeholder="city"  id="city" maxlength="40" name="city" size="20" type="text">
									</div>
								</div>
							</div>
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="state">State/Province</label>
										<input class="form-control" placeholder="state"  id="state" maxlength="20" name="state" size="20" type="text">
									</div>
								</div>
							</div>	
							<div class="side-spacer">
								<div class="field-outer">
									<div class="form-group">
										<label for="country">Country</label>
										<input class="form-control" placeholder="country"  id="country" maxlength="40" name="country" size="20" type="text" required="true">
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
									<option value="">What are you interested in learning more about?</option>
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
									<option value="">Industry</option>
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
									<option value="">Approximate number of attendees anticipated</option>
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
										<textarea placeholder="Please share a little more about your request" class="form-control" name="description"></textarea>
									</div>
								</div>
							</div>
						<div class="side-spacer">
							<div class="form-group">
								<p>To provide additional detail or questions, you may also contact us by phone: 301.380.9570. Our mailing address is: The Ritz-Carlton Leadership Center, 10400 Fernwood Road, 117K, Bethesda, MD, 20817.</p>

								<h3>Employment</h3>
								<p>Please note that all questions about employment at The Ritz-Carlton and The Ritz-Carlton Leadership Center are handled through The Ritz-Carlton <a title="Careers at The Ritz-Carlton" href="http://www.marriott.com/ritz-carlton-careers/default.mi?stop_mobi=yes" target="_blank" rel="noopener noreferrer">Careers</a> website.</p>
							</div>
							<!-- <div class="form-group">
								  <label class="checkbox-container custom-label"><div class="text-container-1">I consent to receive additional communications from The Ritz-Carlton Leadership Center via email. Please Review our <a href="#">privacy policy</a> for additional information.</div><input id="00N6100000IJw5H" name="00N6100000IJw5H" required="" type="checkbox" value="1">
			                            <span class="checkmark"></span>
		                          </label>
							</div> -->
							<sup style="color: red;">*</sup><font style="color: red;">This confirmation is required</font>
							<div class="g-recaptcha" id="g-recaptcha-response"  data-sitekey="6Lf_B74UAAAAAI3vanaTs-c-0i81Yk8KaRsKsxuf"></div>						

						</div>
						<div class="col-sm-12">
							<div class="form-submt-btn"><input type="submit" name="submit">
							</div>
						</div>
					</form><!-- end -->


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
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<script>function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);</script>

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
							<div class="form-group"><input id="Title" maxlength="40" name="title" required="" size="20" type="text" placeholder="Title" class="form-control"></div>
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
							<div class="g-recaptcha" id="g-recaptcha-response"  data-sitekey="6Lf_B74UAAAAAI3vanaTs-c-0i81Yk8KaRsKsxuf"></div>
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