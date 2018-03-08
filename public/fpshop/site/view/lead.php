<html lang='vn_vn'><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body><style type="text/css"><!--
form#WebToLeadForm, form#WebToLeadForm * {margin: 0; padding: 0; border: none; color: #333; font-size: 12px; line-height: 1.6em; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
form#WebToLeadForm {float: left; border: 1px solid #ccc; margin: 10px;}
form#WebToLeadForm h1 {font-size: 32px; font-weight: bold; background-color: rgb(60, 141, 188); color: rgb(247, 247, 247); padding: 10px 20px;}
form#WebToLeadForm h2 {font-size: 24px; font-weight: bold; background-color: rgb(60, 141, 188); color: rgb(247, 247, 247); padding: 10px 20px;}
form#WebToLeadForm h3 {font-size: 12px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h4 {font-size: 10px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h5 {font-size: 8px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h6 {font-size: 6px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm p {padding: 10px 20px;}
form#WebToLeadForm input,
form#WebToLeadForm select,
form#WebToLeadForm textarea {border: 1px solid #ccc; display: block; float: left; min-width: 170px; padding: 5px;}
form#WebToLeadForm select {background-color: white;}
form#WebToLeadForm input[type="button"],
form#WebToLeadForm input[type="submit"] {display: inline; float: none; padding: 5px 10px; width: auto; min-width: auto;}
form#WebToLeadForm input[type="checkbox"],
form#WebToLeadForm input[type="radio"] {width: 18px; min-width: auto;}
form#WebToLeadForm div.col {display: block; float: left; width: 330px; padding: 10px 20px;}
form#WebToLeadForm div.clear {display: block; float: none; clear: both; height: 0px; overflow: hidden;}
form#WebToLeadForm div.center {text-align: center;}
form#WebToLeadForm div.buttons {padding: 10px 0; border-top: 1px solid #ccc; background-color: #f7f7f7}
form#WebToLeadForm label {display: block; float: left; width: 160px; font-weight: bold;}
form#WebToLeadForm span.required {color: #FF0000;}
--></style>
<!-- TODO ???
<script type="text/javascript" src='http://localhost/SuiteCRM-7.9.7/SuiteCRM-7.9.7/cache/include/javascript/sugar_grp1.js?v=1tOhmG6x23JBlkAYijUjkg'></script>
--><form id="WebToLeadForm" action="http://localhost/SuiteCRM-7.9.7/SuiteCRM-7.9.7/index.php?entryPoint=WebToPersonCapture" method="POST" name="WebToLeadForm">
<h2>Hello</h2>
<p>Vui lòng điền thông tin của bạn giúp chúng tôi.</p>
<div class="row">
<div class="col"><label>First Name: </label><input name="first_name" id="first_name" type="text" /></div>
<div class="col"><label>Mobile: </label><input name="phone_mobile" id="phone_mobile" type="text" /></div>
<div class="clear"> </div>
</div>
<div class="row">
<div class="col"><label>Last Name: <span class="required">*</span></label><input name="last_name" id="last_name" type="text" required="" /></div>
<div class="col"><label>Email Address: </label><input name="email1" id="email1" type="email" /></div>
<div class="clear"> </div>
</div>
<div class="row">
<div class="col"><label>Referred By: </label><input name="refered_by" id="refered_by" type="text" /></div>
<div class="col"><label>Birthdate: </label><input name="birthdate" id="birthdate" type="date" /></div>
<div class="clear"> </div>
</div>
<div class="row">
<div class="col"><label>Address: </label><input name="jjwg_maps_address_c" id="jjwg_maps_address_c" type="text" /></div>
<div class="col"> </div>
<div class="clear"> </div>
</div>
<div class="row center buttons"><input class="button" name="Submit" type="submit" value="Submit" onclick="submit_form();" />
<div class="clear"> </div>
</div>
<input name="campaign_id" id="campaign_id" type="hidden" value="3658610b-f5de-8df1-ca70-5a3e29f86932" /> <input name="assigned_user_id" id="assigned_user_id" type="hidden" value="1" /> <input name="moduleDir" id="moduleDir" type="hidden" value="Leads" /></form>
<p>
<script type="text/javascript">// <![CDATA[
    function submit_form() {
        if (typeof(validateCaptchaAndSubmit) != 'undefined') {
            validateCaptchaAndSubmit();
        } else {
            check_webtolead_fields();
            //document.WebToLeadForm.submit();
        }
    }

    function check_webtolead_fields() {
        if (document.getElementById('bool_id') != null) {
            var reqs = document.getElementById('bool_id').value;
            bools = reqs.substring(0, reqs.lastIndexOf(';'));
            var bool_fields = new Array();
            var bool_fields = bools.split(';');
            nbr_fields = bool_fields.length;
            for (var i = 0; i < nbr_fields; i++) {
                if (document.getElementById(bool_fields[i]).value == 'on') {
                    document.getElementById(bool_fields[i]).value = 1;
                } else {
                    document.getElementById(bool_fields[i]).value = 0;
                }
            }
        }
    }
// ]]></script>
</p></body></html>