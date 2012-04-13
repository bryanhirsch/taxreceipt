<?php
/**
 * @file taxreceipt-taxpayer-story.tpl.php
 * 
 * Variables:
 *  - $taxpayer_stories, array including:
 *     $taxpayer_stories[$machine_name]['title'] = '$80,000 income — married with two children';
 *     $taxpayer_stories[$machine_name]['description'] = 'This assumes this family contributes 5 percent ';
 *     $taxpayer_stories[$machine_name]['income'] = '$80,000';
 *     $taxpayer_stories[$machine_name]['social security tax'] = '4.2%';
 *     $taxpayer_stories[$machine_name]['medicare tax'] = '1.45%';
 *     $taxpayer_stories[$machine_name]['income tax'] = '5.7375%';
 */
?>

			    <div class="range-container">
					<a href="javascript:;" id="taxr-range-link-one" data-socsec="1050" data-medicare="363" data-income="1775">$25,000 income &mdash; single with no children</a><br />
					<p id="taxr-range-text">This assumes this family example contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, claims the Saver's Credit, and Making Work Pay.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-two" data-socsec="1441" data-medicare="497" data-income="803">$35,000 income &mdash; single parent with one child</a><br />
					<p id="taxr-range-text">This assumes this family example contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Saver's Credit, as well as Making Work Pay, the EITC, and the Child Tax Credit.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-three" data-socsec="2100" data-medicare="725" data-income="995">$50,000 income &mdash; married with one child</a><br />
					<p id="taxr-range-text">This assumes this family contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Saver's Credit, as well as the Making Work Pay and Child Tax Credits.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-four" data-socsec="2520" data-medicare="870" data-income="4558">$60,000 income &mdash; single parent with one child</a><br />
					<p id="taxr-range-text">This assumes this family contributes 5 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Making Work Pay and Child Tax Credits.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-five" data-socsec="3360" data-medicare="1160" data-income="4590">$80,000 income &mdash; married with two children</a><br />
					<p id="taxr-range-text">This assumes this family contributes 5 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Making Work Pay and Child Tax Credits.</p>
					</div>
