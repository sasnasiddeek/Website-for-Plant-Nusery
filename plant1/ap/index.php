<?php
/**
 * Created by chathura
 * User: chathura
 * Date: 20-11-2019
 * Time: 22.37
 */
include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Orders</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Successfully your appointment submitted!</div>";
    }
?>

<h1>Please add your details</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="CustomerName">Customer Name:</label>
            <input type="text" name="name" Id="CustomerName" />

            <label for="Email">Email:</label>
            <input type="text" name="email" Id="Email" />

            <label for="UserName">User Name:</label>
            <input type="text" name="user" Id="UserName" />

            <label for="Password">Password:</label>
            <input type="password" name="password" Id="Password" />

            <label for="CustomerAddress">Customer Address:</label>
            <input type="text" name="address" Id="CustomerAddress" />


            <label for="ContactNumber">Contact Number:</label>
            <input type="num" name="contact" Id="ContactNumber" />

        
            <label for="Item">Item:</label>
            <select name="item" Id="Item">
            	<option value="flowers">Flowers Plant</option>
            	<option value="fruits">Fruits Plant</option>
            	<option value="vegitables">Vegitables Plant</option>
            	<option value="seads">Seads</option>
                <option value="pots">Pots</option>
                <option value="fertlizes">Fertlizes</option>
            </select>  

            <label for="Pices">Pices:</label>
            <input type="num" name="pices" Id="Pices" /> 

            <label for="DiliverPlace">Diliver Place:</label>
            <input type="text" name="place" Id="DiliverPlace" />  

            <label for="DiliverDate">Diliver Date:</label>
            <input type="num" name="date" Id="DiliverDate" /> 
 


            <br>

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" Id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>