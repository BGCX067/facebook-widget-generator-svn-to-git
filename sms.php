

<html>

<head><title>SMSfront.Com</title></head>

<body>


<form name="myform" action="smspost.php?d002r6vliqjq4a0afv09at9ag3" method="get">

<table>

<script language=javascript>

//Edit the counter/limiter value as your wish

var count = "440";   //Example: var count = "175";

function limiter(){

var n = document.myform.name.value;

var nlen = n.length;

var msg = document.myform.msg.value;

var len = msg.length;

if (len > count - nlen){

        msg = msg.substring(0, count - nlen);

        document.myform.msg.value = msg;

        return false;

}

document.myform.limit.value = count - len - nlen;

}



</script>

<tr>
      <td width="150"><strong><font size="2" face="Verdana">Your Name/Nick:</font></strong></td>
      <td width="224"><input name="name" size="20" maxlength="10" onkeyup=limiter()></td></tr>

<tr>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Receiver's 
        Number</strong></font>:</td>
      <td>



    <select name="prefix" size="1">

		    <option value="" selected="selected">Select Code</option>

                    <option value="300">0300</option>

                    <option value="301">0301</option>

                    <option value="302">0302</option>
					
					<option value="303">0303</option>
					
					<option value="304">0304</option>
					
					<option value="305">0305</option>

                    <option value="306">0306</option>

                    <option value="307">0307</option>

                    <option value="308">0308</option>
					
					<option value="309">0309</option>
					
					<option value="312">0312</option>
					
					<option value="313">0313</option>
					
					<option value="314">0314</option>
					
					<option value="315">0315</option>
					
					<option value="320">0320</option>
					
					<option value="321">0321</option>
					
					<option value="322">0322</option>
					
					<option value="323">0323</option>
					
					<option value="324">0324</option>
					
					<option value="331">0331</option>
					
					<option value="332">0332</option>
					
					<option value="333">0333</option>
					
					<option value="334">0334</option>
					
					<option value="335">0335</option>
<option value="336">0336</option>
<option value="337">0337</option>
<option value="338">0338</option>
					
					<option value="341">0341</option>
					
					<option value="342">0342</option>
					
					<option value="343">0343</option>
					
					<option value="344">0344</option>
					
					<option value="345">0345</option>
					
					<option value="346">0346</option>

		            <option value="347">0347</option>

                    <option value="348">0348</option>

                    

        </select>
        <input name="to" size="15" maxlength="7"></td></tr>

    <tr> 
      <td><font size="2" face="Verdana"><strong>Message</strong></font>:</td>
      <td><textarea name="msg" cols="27" rows="6" onkeyup=limiter()></textarea></td></tr>

<tr>
      <td><font size="2" face="Verdana"><strong>Characters left:</strong></font></td>
      <td><script language=javascript>

document.write("<input type=text name=limit size=4 readonly value="+count+">");

</script></td></tr>

<!--<tr><td>Security code:</td><td>&nbsp;<input type="text" name="code" /></td></tr>-->

<tr>
      <td><font size="2" face="Verdana"><strong>Security code:</strong></font></td>
      <td><img src="securimage/securimage_show.php?sid=0412053521aef5ebbee3862f153bcac0">&nbsp;<input type="text" name="code" /></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" name="send" value="Send SMS"></td></tr>

</table>

</form>

</body>

</html>