<!--
default page, login form and link for registration
-->
<?php
include('config.php');
session_start();
if(empty($_SESSION['user'])) {
?>

<html>
<head>
    <style type="text/css">
       #frm{
           margin-left: 771px;
           margin-top: 10px;
       }
        #header{
            background-color:  #6495ed; margin-bottom: 20px;  min-height: 75px;
            overflow: hidden;
        }
        .regis{
            margin-left: 700px;
        }

       input#login{
           background: #f0ffff url('images/login.PNG') no-repeat top left;
           height: 35px;
           padding-left: 52px;
       }


        .logo{
           width: 150px
            margin-top: 10px; float: left;
        }

    </style>
    <script type="text/javascript">
    function loginCheck(){
            document.getElementById("userError").innerHTML = "";
            document.getElementById('passError').innerHTML = "";

        var ulen = document.getElementById("username").value.length;
        if(ulen == 0) {
            document.getElementById("userError").innerHTML = "username cant be blank";
        }

        var plen = document.getElementById("pass").value.length;
        if(plen == 0) {
            document.getElementById('passError').innerHTML = "password cant be blank";
            return false;
        }

        if(ulen != 0 && plen != 0){
            document.frm.submit();
            return false;
        }
    }
/*
*
* function for registration form
* */
    function chkBlank(){
        var numbers = /^[0-9]+$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        document.getElementById("nameError").innerHTML = "";
        document.getElementById("surnameError").innerHTML = "";
        document.getElementById("genderError").innerHTML = "";
        document.getElementById("passwordError").innerHTML = "";
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("bdayError").innerHTML = "";
        document.getElementById("addressError").innerHTML = "";
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("picError").innerHTML = "";
        document.getElementById("complete").innerHTML = "";



        var name = document.getElementById("name").value.length;
        if( name == 0){
            document.getElementById("nameError").innerHTML = "dont leave blank";
            return false;
        }


        var surname = document.getElementById("surname").value.length;
        if( surname == 0){
            document.getElementById("surnameError").innerHTML = "dont leave blank";
            return false;
        }

        if ( !(document.getElementById("gender_f").checked ) && !(document.getElementById("gender_m").checked )){
            document.getElementById("genderError").innerHTML = "select one gender";
            return false;
        }



        var password = document.getElementById("password").value.length;
        if( password == 0){
            document.getElementById("passwordError").innerHTML = "dont leave blank password";
            return false;
        }
        if(!(password <= 8 && password >=4)){
            document.getElementById("passwordError").innerHTML = "password should be between 4 to 8 letters";
            return false;
        }


        var phone_no = document.getElementById("phone").value;
        if( phone_no.length == 0){
            document.getElementById("phoneError").innerHTML = "dont leave blank";
            return false;
        }
        if( !(phone_no.match(numbers))){
            document.getElementById("phoneError").innerHTML = "enter no.s only";
            return false;
        }
        if( phone_no.length > 10 || phone_no.length < 10){
            document.getElementById("phoneError").innerHTML = "enter 10 no.s only";
            return false;
        }

        if( (document.getElementById("date").value == 'date') || (document.getElementById("month").value == 'month') || (document.getElementById("year").value == 'year') ){
            document.getElementById("bdayError").innerHTML = "choose a proper date";
            return false;
        }

        var address = document.getElementById("address").value.trim().length;
        if( address == 0){
            document.getElementById("addressError").innerHTML = "dont leave address blank";
            return false;
        }


        var email = document.getElementById("email").value.trim();
        if( email.length == 0){
            document.getElementById("emailError").innerHTML = "dont leave blank";
            return false;
        }
        if(!( email.match(mailformat))){
            document.getElementById("emailError").innerHTML = "enter a proper mail id";
            return false;
        }



        var pic = document.getElementById("pic").value.length;
        if( pic == 0){
            document.getElementById("picError").innerHTML = "dont leave blank";
            return false;
        }


        //document.frm1.submit();
        //document.getElementById("frm1").submit();
        var cnf = confirm("confirm registation");
        if(cnf == true) {
            alert("registration complete!!");
        }
        else {
            alert("registration failed!! TRY AGAIN ");
            return false;
        }
    }

</script>
  
</head>
<body bgcolor="#fffaf0">
<div id="header">
<center>
    <div class="logo">
    <img src="./images/logo.gif"  height="100px" width="380px"/>
        </div>

    <form id="frm" name="frm" action="logincheck.php" method="post"">

        <table border="0" bgcolor="#6495ed" cellpadding="1" cellspacing="0">
            <tr>
                <td>
                    <?php
                    if(!empty($_SESSION['invalid'])){
                        echo "wrong username password";
                        $_SESSION['invalid'] = null;
                    }
                    ?>
                </td>
            </tr>
            <tr>

                <td> Email <br/> <input type="text" name="username" id="username" >
                    <div id="userError"></div>

                </td>

                <td>  Password <br/> <input type="password" name="password" id="pass">
                    <div id="passError"></div>
                </td>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp; <input type="button" id="login" value =""  onclick="loginCheck()">
                </td>

            </tr>
        </table>
    </form>
</center>
</div>
<div class="regis\" >
    <center>
        <h1> Registration form </h1>

        <form name="frm1" action="" method="post" enctype="multipart/form-data"  id="frm1" onsubmit="return chkBlank()">
            <table>

                <tr>
                    <td>

                        NAME:
                    </td>
                    <td>
                        <input type="text" name="name" id="name" >
                        <div id="nameError"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        SURNAME:
                    </td>
                    <td><input type="text" name="surname" id="surname">
                        <div id="surnameError"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        GENDER:
                    </td>
                    <td>
                        Male: <input type="radio" name="gender" value="m" id="gender_m">
                        &nbsp;
                        Female: <input type="radio" name="gender" value="f" id="gender_f">
                        <div id="genderError"></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        PASSWORD
                    </td>
                    <td><input type="password" name="pass" id="password"/>
                        <div id="passwordError"></div>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>
                        PH NO.:
                    </td>
                    <td><input type="text" name="phone" id="phone">
                        <div id="phoneError"></div></td>
                </tr>
                <tr>
                    <td>
                <tr>
                    <td> Birthday</td>
                    <td>
                        <select name="day" id="date">
                            <option value="date">date</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo '<option value=' . $i . '>' . $i . '</option>';
                            }
                            ?>
                        </select>

                        <select name="month" id="month">
                            <option value="month">month</option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="Mar">March</option>
                            <option value="Apr">April</option>
                            <option value="May">May</option>
                            <option value="Jun">June</option>
                            <option value="Jul">July</option>
                            <option value="Sept">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                        </select>

                        <select name="year" id="year">
                            <option value="year">year</option>
                            <?php
                            for ($i = 1970; $i <= 2015; $i++) {
                                echo '<option value=' . $i . '>' . $i . '</option>';
                            }
                            ?>
                        </select>
                        <div id="bdayError"></div>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>

                        ADDRESS
                    </td>
                    <td>

                        <textarea name="address" id="address" rows="15" cols="10" style="max-width: 100px; min-width: 100px; max-height: 75px; min-height: 75px; text-align: left">

                        </textarea>


                        <div id="addressError"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMAIL:
                    </td>
                    <td><input type="text" name="email" id="email">
                        <div id="emailError"></div></td>
                </tr>
                <tr>
                    <td> upload photo !!</td>
                    <td><input type="file" name="pic" id="pic"/>
                        <div id="picError"></div></td>
                </tr>
                <tr>
                    <td><input type="submit" id="register" name="register" value="save" />
                    </td>
                    <td><input type="reset" align="middle"/>

                    </td>
                   <tr>
                        <td rowspan="2">
                            <div id="complete"></div>
                        </td>

                   </tr>
                </tr
            </TABLE>
        </form>
    </center>
    </div>
</body>
</html>
<?php
}
else{
        if($_SESSION['user'] != 'admin'){
            header("location:success.php");
        }
        else{
            header("location:admin_success.php");
        }

    }

    ?>
<?php
/* insert query block for registration form*/
if(!empty($_POST['register'])){
$DOB = $_POST["day"] . "/" . $_POST["month"] . "/" . $_POST["year"];
$current = date("d/m/y");
$encrypt_password = md5($_POST['pass']);
$nname = $_FILES["pic"]["name"];
move_uploaded_file($_FILES["pic"]["tmp_name"],
    "images/" . $_FILES["pic"]["name"]);

$query = "INSERT INTO user ( name , surname , gender, password, phone, DOB, REG, address ,email, pic)
   VALUES ('$_POST[name]','$_POST[surname]','$_POST[gender]','$encrypt_password', '$_POST[phone]','$DOB', '$current','$_POST[address]'
    ,'$_POST[email]' ,  '$nname' )";

    mysql_query($query);

}
?>