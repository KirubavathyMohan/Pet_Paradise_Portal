<html>
<head>
<title>WE CARE HEALTH CENTER</title>
 	
<style type="text/css">


body {
    background-image:url('reg-bg');
    background-size: 1500px 900px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
           option{
                width: 100px;
		
            }
            radio{
                width: 100px;
            }
	input {
                text-indent: 4px;
            }
        option {
    overflow: hidden;
    white-sapce: no-wrap;
    text-overflow: ellipsis;
}
</style>
</head>
<body>
<form action='regis1.php' method='post'>
<h1><center><font color=' red'>REGISTRATION FORM</font></center></h1>
<table align='left' style="background-color:ash" cellspacing='10'  border:1px solid  >
<tr>

     

<tr>
      <td><font color="sky blue"><b>ENTER YOUR NAME:</b></font></td>
      <td><input type='text' name='name' autocomplete="off" required="true" placeholder="NAME"/></td>
</tr>


<tr><td><font color="sky blue"><b>GENDER:</b></td>
<td><input type='radio' name='gender' value='male'/>MALE
<input type='radio' name='gender' value='female'/>FEMALE
</td></tr>
<tr>
	<td> <font color="sky blue"><b>ENTER THE E-MAIL:</b></font></td>
	<td> <input type='email' name='email' required='true'  autocomplete="off" placeholder='E-MAIL'/></td>
</tr>
<tr>
	<td> <font color="sky blue"><b>ENTER THE PASSWORD:</b></font></td>
	<td> <input type='password' name='password' required='true' autocomplete="off" placeholder='PASSWORD'/></td>
</tr>

<tr>
<td><font color="sky blue"><b>ENTER YOUR AGE:</b></font></td>
<td><input type="text" name="dob" placeholder='YOUR AGE' ></td></tr>

<tr><td><font color="sky blue"><b>ENTER THE MOBILE NO:</b></font></td>
	<td><select name='code'>
        <option>--country--</option>	
	<option>+91</option><option>+1</option><option>+971</option><option>+44</option><option>+61</option><option>+65</option><option>+974</option><option>+965</option><option>+968</option><option>+973</option><option>+966</option><option>+60</option><option>+49</option><option>+64</option><option>+33</option><option>+353</option><option>+41</option><option>+27</option><option>+94</option><option>+62</option><option>+977</option><option>+92</option><option>+880</option><option>+93</option>
	</select>
	<input type='text' name='num' placeholder='MOBILE'></td></tr>
	 
	
<tr>
                                    <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;                                  
                                        <input type="submit" value="REGISTER" id="buttons"/>
                                        &nbsp;&nbsp;&nbsp;
                                       
                                    </td>
                                </tr>

</table></form>
</body>

 