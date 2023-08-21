<?php /* Template Name: Report Frauds Page */ ?>
<?php
get_header();
?>
<?php 
$please_report_the_following_heading = get_field("please_report_the_following_heading");
$please_report_the_following_content_1 = get_field("please_report_the_following_content_1");
$please_report_the_following_sub_heading= get_field("please_report_the_following_sub_heading");
$please_report_the_following_content_2= get_field("please_report_the_following_content_2");
$note= get_field("note");
$security_tips_heading= get_field("security_tips_heading");
$security_tips_content= get_field("security_tips_content");
$dos_heading= get_field("do’s_heading");
$dont_heading=get_field("dont’s_heading");

?>
<div class="container">
    <div class="terms-cards">
        <div class="blogwidget">
                            <div class="blogtitle">
                                <h4 style=""><strong><?php echo $please_report_the_following_heading; ?> </strong></h4>
                            </div>
                            <div class="widgetbody" style="padding:15px;">
                                <?php echo $please_report_the_following_content_1; ?>
<!-- 									Kindly report any Unauthorized transaction done by unauthorized person from your ADC Bank account of <strong>via any Electronic Payment Channels</strong>. -->
									
                                <p align="justify" style="color: #212e7d;"><strong> <?php echo $please_report_the_following_sub_heading; ?></strong></p>
                                <?php echo $please_report_the_following_content_2; ?><br><br>
                                
                                <p align="justify" style="color: #ff3333; font-size:20px; ">
                                    <strong><?php echo $note; ?></strong>
                                </p>
                            </div>
                            <span class="box-arrow"></span> 
        </div>
        <div class="report-form">
            <div class="blogtitle">
				<h4><i class="fa fa-user-secret" aria-hidden="true"></i> <strong>Fraud Report Form</strong></h4>
			</div>
            <div class="report-form-inner">
                <?php echo do_shortcode('[contact-form-7 id="0b68eed" title="Fraud Report Form"]'); ?>
            </div>
        </div>
    </div>

    <div class="boxes-full">
					<div class="security-box">
                        <div class="blogtitle" style="">
						    <h4 style=""><strong><?php echo $security_tips_heading; ?></strong></h4>
					    </div>
                        <div class="splitnone" style="">
                            <div class="list-group" style="">
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Do not reply to any email, if you receive an e-mail claiming to be from ADC Bank regarding updating or asking any sensitive account information like PIN, password, account number, etc.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    If you notice any spoofed (duplicate/unofficial) ADC Bank website, please inform us by filling the above form with necessary details.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    To report unauthorized transactions in your account
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="security-box">
                        <div class="blogtitle" style="">
                            <h4 style=""><strong><?php echo $dos_heading; ?></strong></h4>
                        </div>
                        <div class="splitnone" style="">
                            <div class="list-group" style="">
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Give your user id and password only at the authenticated login page.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Provide your personal details over phone/Internet only if you have initiated a call or session and the counterpart has been duly authenticated by you.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Please remember that the bank would never ask you to verify your account information through an e-mail.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Always logon to a site by typing the proper URL in the address bar.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="security-box">
                        <div class="blogtitle" style="">
                            <h4 style=""><strong><?php echo $dont_heading; ?></strong></h4>
                        </div>
                        <div class="splitnone" style="">
                            <div class="list-group" style="">
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Do not provide any information on a page which might have come up as a pop-up window.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Never provide your password over the phone or in response to an unsolicited request over e-mail.
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" style="" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    <!--<p class="text-break" style="overflow-wrap: break-word;">-->
                                    Always remember that information like password, PIN, TIN, etc are strictly confidential and are not known even to employees/service personnel of the Bank. You should therefore, never divulge such information even if asked for.<!--</p>-->
                                    
                                </span>
                                <span class="list-group-item" style="">
                                    <b><i class="fa fa-hand-o-right" aria-hidden="true"></i></b>&nbsp;&nbsp;&nbsp;
                                    Do not click on any link which has come through e-mail from an unexpected source. It may contain malicious code or could be an attempt to ‘Phish’.
                                </span>
                            </div>
                        </div>
                    </div>
					<span class="box-arrow"></span> 
				</div>
</div>
<?php
get_footer();