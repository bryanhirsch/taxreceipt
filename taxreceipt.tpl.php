<?php
/**
 * @file taxreceipt.tpl.php
 * 
 * Variables:
 *  - $node, object
 *  - $user
 *  - $variables, array
 *  - $is_admin
 *  - $is_front
 *  - $logged_in
 *  - $db_is_active
 *  - $zebra
 * 
 *  - $line_items, array including:
 *     $line_items[$machine_name]['title']
 *     $line_items[$machine_name]['machine name']
 *     $line_items[$machine_name]['percent']
 *     $line_items[$machine_name]['description']
 *     $line_items[$machine_name]['is_subcategory']
 *     $line_items[$machine_name]['parent']
 *     $line_items[$machine_name]['subcategories']
 * 
 * TODO?...
 *  - $date
 *  - $city
 */
?>
<body id="taxr-page">
<div id="taxr-header">
  <div class="taxr-info">
    <div class="city">Washington, DC</div>
    <div class="date">April, 2012</div>
  </div>
</div>
<div id="taxr-header-title">
  <h1>Your Federal Taxpayer Receipt</h1>
  <hr class="subtitle-rule" />
  <div class="subtitle">Understand how and where your tax dollars are being spent</div>
</div>
<div id="taxr-tabset">
	<div id="taxr-calculate" class="taxr-tab">
		<div id="taxr-calculate-form-top">
			<div id="taxr-calculate-form">
			  <div class="taxr-instructions">Enter your 2011 payments below or select an estimate from the drop down menu</div>
				<div id="taxr-error-numeric">There is an error with one of your inputs &mdash; please only use positive, numeric values (0-9) </div>
				<div id="taxr-input" class="input-1">
					<label>Social Security Tax</label>
					<input name="taxr-input-socsec" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-socsec" title="Please enter the amount of Social Security taxes you paid in 2011. You can generally find this information on the Form W-2 your employer sent you, in box 4, labeled 'Social security tax withheld.'"></a>
				</div>
				<div id="taxr-input" class="input-2">
					<label>Medicare Tax</label>
					<input name="taxr-input-medicare" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-medicare" title="Please enter the amount of Medicare taxes you paid in 2011. You can generally find this information on the Form W-2 your employer sent you, in box 6, labeled 'Medicare tax withheld.'"></a>
				</div>
				<div id="taxr-input" class="input-3">
					<label>Income Tax</label>
					<input name="taxr-input-income" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-income" title="Please enter the amount of your income tax liability for 2011.  This is not the additional amount you owe (if any) on April 15 but rather the whole amount of federal income taxes for 2011: amounts already withheld from your paycheck during 2011 plus any additional amount paid on April 15 or minus any refund you applied for on April 15.  You can generally find this total figure in your income tax return, line 11 of Form 1040EZ or line 55 of Form 1040."></a>
				</div>
				<div id="taxr-calculate-button"></div>
				<div class="taxr-income-instr">Don't have your tax information handy?</div>		
			</div>
		</div>
		<div id="taxr-calculate-range-container"> 
			<div id="taxr-range-row" class="clearfix">
				<div id="taxr-range-toggle"></div>
			</div>
			<div id="taxr-range-select">
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
			</div>
		</div>
		<div class="taxr-top-row-first">
			<div id="taxr-bluea">PROGRAMS & SERVICES</div><div id="taxr-blueb">YOUR TAX PAYMENT</div>
		</div>
		<div class="taxr-top-row ">		
			<div id="taxr-cola"><h3>Social Security Tax</h3></div><div id="taxr-colb"><div id="data-socsec-tax">$0</div></div>
			<div id="taxr-cola"><b>Social Security Retirement, Survivors, and Disability Insurance</b></div><div id="taxr-colb"><div id="data-socsec-sub">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div class="taxr-top-row">		
			<div id="taxr-cola"><h3>Medicare Tax</h3></div><div id="taxr-colb"><div id="data-medicare-tax">$0</div></div>
			<div id="taxr-cola"><b>Medicare Hospital Insurance</b></div><div id="taxr-colb"><div id="data-medicare-sub">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div id="taxr-income-row" class="taxr-top-row">		
			<div class="taxr-col1"><span id="taxr-subhead">Income Tax</span><span id="taxr-cat-toggle"><a href="javascript:;" id="taxr-cat-expand-all" class="underline">Expand All Sub-Categories</a><a href="javascript:;" id="taxr-cat-collapse-all">Collapse All Sub-Categories</a></span></div>
			<div class="taxr-col2">% of Total Income<br /> Tax Payment</div>
			<div class="taxr-col3"><div id="data-income-tax">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div id="taxr-categories">

      <?php foreach ($line_items as $line_item) { print theme('taxreceipt-line-item', $line_item); } ?>
      
    </div>

			<div id="taxr-cat-tophead"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-agriculture" title="Spending on interest, including interest on Treasury debt securities. (Corresponds to budget function 900)">Net Interest</a></div><div class="taxr-col2">8.1%</div><div class="taxr-col3"><div id="taxr-data-percent-interest" data-percent="7.4">$0</div></div></div></div>

		</div>
		<div id="taxr-total-bar">
			<div id="taxr-cola" class="taxr-total-label">TOTAL INCOME AND PAYROLL TAXES YOU PAID</div>
			<div id="taxr-colb"><div id="taxr-data-totaltax"></div></div>
		</div>
		<div id="taxr-nav-numbers"><a class="numbers-link" href="#taxr-numbers">Learn more about the numbers</a></div>
		<!--share links-->
    <div id="taxr-social-links">
    		<a href="http://www.facebook.com/share.php?s=100&amp;p[title]=Your 2011 Federal Taxpayer Receipt&amp;p[url]=http://www.whitehouse.gov/2011-taxreceipt&amp;p[images][0]= http://www.whitehouse.gov/sites/default/files/calulator_fb_share.jpg" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_facebook_btn.png"></a>&nbsp;&nbsp;<a href="http://twitter.com/home/?status=Understand%20where%20your%20federal%20tax%20dollars%20are%20being%20spent%20with%20the%20White%20House%20tax%20receipt%20tool%3A%20http%3A//wh.gov/tax-receipt%20via%20@whitehouse" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_twitter_btn.png"></a>
    	</div>
		  <div id="taxr-print-link"></div>
    	<!--end share links -->
	</div>
	<div id="taxr-numbers" class="taxr-tab">
	    <a class="calculate-button" href="#">Calculate Your Tax Receipt</a>
  		<h3>How the Federal Taxpayer Receipt Amounts are Calculated</h3>
  		
		<p>Amounts in the Federal Taxpayer Receipt are based on the percentage of overall federal spending for each category in the Fiscal Year 2011</p>
    <h3>Overall Federal Spending</h3>
    <div class="chart-container clearfix">
		<div id="container" style="width: 300px; height: 300px; margin: 0 auto; float:left;"></div>
		</div>
		<p>The Medicare Hospital Insurance and Social Security trust funds are funded primarily with dedicated payroll taxes. Because the amount you contribute to these trust funds is readily available on your W-2 form that you get from your employer, these tax payments are shown separately on the tax receipt. There are other key federal programs paid for with dedicated funding sources independent of federal income tax payments, such as highway and mass transit spending. If the cost of these programs exceeds the amount of funding, the difference covered by your tax dollars is shown on the tax receipt.</p>
 
		<p>Even including revenue from all these sources, Federal Government spending has exceeded the revenue it collects since 2002. This shortfall between revenues and spending is known as the budget deficit, and in 2011 it was $1.300 trillion. Learn more about how<a href="http://www.whitehouse.gov/blog/2012/02/13/2013-budget-0" target="_blank"> President Obama's budget would reduce the budget deficit</a> at WhiteHouse.gov.</a></p>
 
		<h3>Organization of the Budget</h3>

		<p>The categories on the tax receipt are based on how the federal budget is organized. The budget is organized into 19 major functions according to the major purpose the spending serves &mdash; such as agriculture or national defense.  Within these functions are more specific sub-functions. For example, in the Education, Training, Employment, and Social Services function, there are several sub-functions, including Higher Education. The full list of functions and sub-functions is <a href="http://www.whitehouse.gov/tax-receipt/functions" target="_blank">available here</a>.</p>
	<!--share links-->
	<div id="taxr-nav-numbers" class="taxr-tab-active"><a class="calculate-button2" href="#taxr-numbers">Calculate your receipt</a></div>
  <div id="taxr-social-links">
    		<a href="http://www.facebook.com/share.php?s=100&amp;p[title]=Your 2011 Federal Taxpayer Receipt&amp;p[url]=http://www.whitehouse.gov/2011-taxreceipt&amp;p[images][0]= http://www.whitehouse.gov/sites/default/files/calulator_fb_share.jpg" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_facebook_btn.png"></a>&nbsp;&nbsp;<a href="http://twitter.com/home/?status=Understand%20where%20your%20federal%20tax%20dollars%20are%20being%20spent%20with%20the%20White%20House%20tax%20receipt%20tool%3A%20http%3A//wh.gov/tax-receipt%20via%20@whitehouse" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_twitter_btn.png"></a>
  </div>
  <div id="taxr-print-link"></div>
	<!--share links-->
	</div>
	<div id="taxr-footer-links" class="clearfix">
		<div id="taxr-footer-list">
		  <div class="buffet-links">
		  <div class="buffett-upper"></div>
		  <div class="buffett-left">DID YOU KNOW?<br />1,470 people who made more than $1 million in 2009 paid $0 in federal income taxes.</div>
		  <a class="buffett-right" href="http://www.whitehouse.gov/economy/buffett-rule" target="_blank">The Buffett rule will ensure everyone pays their fair share. Learn More...</a>
		  <div class="buffett-lower"></div>
		  </div>
			<div id="taxr-footer-link-list" style="padding: 0 8px 0 0; border-right: 1px solid #333;"><a target="_blank" class="underline" href="http://www.whitehouse.gov/get-email-updates">Sign up for email updates from the White House</a></div>
			
			<div id="taxr-footer-link-list" style="padding-left: 8px;"><a href="http://www.whitehouse.gov/tax-receipt/feedback" target="_blank" class="underline">Share your thoughts on this receipt</a></div>
      <a id="taxr-embedbox-link" href="javascript:;" data-embed="<p>Copy this code to embed the taxpayer receipt tool on your website:</p><textarea rows='5' cols='30'><iframe scrolling='no' frameborder='0' height='2150' width='700' src='http://www.whitehouse.gov/files/taxreceipt2012/index.html' target='_blank'></iframe></textarea>">Embed the Taxpayer Receipt Tool on Your Own Website</a>
		</div>
	</div>
</div><!-- end #taxr-tabset -->
  <div id="taxr-footer">
  </div><!-- end #taxr-footer -->
</body>