<!-- Slider section -->
<?php if (get_row_layout() == 'contact_form'): ?>
	<section class="contact-form-section text-center">
		<?php
			if( get_sub_field('cf_select_form') == 'main_contact_form' ) { ?>
			<div class="container">
				<?php if(get_sub_field('cf_heading')): ?>
					<h2><?php the_sub_field('cf_heading'); ?></h2>
				<?php endif; ?>
				<div class="row">
					<div class="contact-form cf-form-container">
						<h3>It would be our pleasure to speak with you.</h3>
						<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"><input name="oid" type="hidden" value="00D61000000dOgr" />
						<input name="retURL" type="hidden" value="http://ritzcarltonleadershipcenter.com/thank-you/" />
						<input name="recordType" type="hidden" value="01261000000SWNH" />
						<div class="col-md-6">
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="last_name" class="form-control" maxlength="40" name="first_name" required="true" size="50" type="text" placeholder="First Name" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="last_name" class="form-control" maxlength="40" name="last_name" required="true" size="50" type="text" placeholder="Last Name" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="email" class="form-control" maxlength="40" name="email" required="true" size="50" type="text" placeholder="Email" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="phone" class="form-control" maxlength="40" name="phone" required="true" size="50" type="text" placeholder="Phone" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="title" class="form-control" maxlength="40" name="title" required="true" size="50" type="text" placeholder="Title" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="company" class="form-control" maxlength="40" name="company" required="true" size="50" type="text" placeholder="Company Name" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="city" class="form-control" maxlength="40" name="city" required="true" size="50" type="text" placeholder="City" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="state" class="form-control" maxlength="40" name="state" required="true" size="50" type="text" placeholder="State" /></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><input id="country" class="form-control" maxlength="40" name="country" required="true" size="50" type="text" placeholder="Country" /></div>
						</div>
						</div>
						</div>
						<div class="col-md-6">
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group">
						<div class="select-option"><select id="00N6100000HUTOP" class="form-control" title="Lead Type" name="00N6100000HUTOP" required="true">
						<option>What are you interested in learning more about?</option>
						<option value="">--Please Select--</option>
						<option value="Advisory Consulting Services">I am interested in exploring a consulting engagement</option>
						<option value="Onsite Presentations &amp; Facilitation">I am seeking a speaker for one or several meetings or conferences</option>
						<option value="Enrichment Courses &amp; Learning Services">I want to attend a course at a Ritz-Carlton Hotel</option>
						</select></div>
						</div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group">
						<div class="select-option"><select id="industry" class="form-control" name="industry" required="true">
						<option>Industry</option>
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
						</select></div>
						</div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group">
						<div class="select-option"><select id="00N6100000IJquk" class="form-control" title="Approximate Number of Attendees" name="00N6100000IJquk" required="false">
						<option>Approximate number of attendees</option>
						<option value="">--Please Select--</option>
						<option value="1">1</option>
						<option value="2-19">2-19</option>
						<option value="20+">20-50</option>
						<option value="51-100">51-100</option>
						<option value="101-200">101-200</option>
						<option value="201-300">201-300</option>
						<option value="300+">300+</option>
						</select></div>
						</div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="field-outer">
						<div class="form-group"><label for="Comments__c">Please share a little more about your request</label>
						<textarea id="00N6100000HUdX2" class="form-control" cols="48" name="00N6100000HUdX2" required="" rows="10"></textarea></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6LeoOLUUAAAAACh00XgVBpSnqQLoBipdcjkUwLF2"></div>
						</div>
						</div>
						<div class="side-spacer">
						<div class="form-group">

						To provide additional detail or questions, you may contact us by phone: 301.380.9570 or by email: <a href="mailto:leadershipcenter@ritzcarlton.com">leadershipcenter@ritzcarlton.com</a>. Our mailing address is: The Ritz-Carlton Leadership Center, 10400 Fernwood Road, 117K, Bethesda, MD, 20817.

						</div>
						</div>
						<div class="side-spacer">
						<div class="form-group">
						<h3>Employment</h3>
						Please note that all questions about employment at The Ritz-Carlton and The Ritz-Carlton Leadership Center are handled through The Ritz-Carlton <a title="Careers at The Ritz-Carlton" href="http://www.marriott.com/ritz-carlton-careers/default.mi?stop_mobi=yes" target="_blank" rel="noopener noreferrer">Careers</a> website.

						</div>
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
								<option>Industry</option>
								<option value="">--None--</option>
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
										<option>Approximate Number of Attendees</option>
										<option value="">--None--</option>
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