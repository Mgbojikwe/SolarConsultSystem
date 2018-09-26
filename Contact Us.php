required './php/handler.php';
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css" >
    <script src="form.js"></script>

</head>
<style>
    *{
    box-sizing: border-box;
}
    body{
        margin: 0;
}
    /*Web Title*/
#header{
    text-align: left;
    padding: 13px;
    padding-left: 50px;
    font-size: 25px;
    background-color: white;
}
span{
    color:cadetblue;
}
    /*Navigation Bar*/
#list{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:dimgray;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
}
li.ex1{
    float: left;
    font-size: 18px;
    padding-left: 50px;
}
li#dropdown{
    display: inline-block;
}
li a, #dropbtn{
    display: inline-block;
    background-color:dimgray;
    color: white;
    text-align: center;
    padding: 28px 16px;
    text-decoration: none;
    width: 150px;
}
#dropcontent{
    display: none;
    position: absolute;
    min-width: 150px;
    overflow:auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
#dropcontent a{
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
#dropcontent a:hover {background-color: cadetblue}
#dropdown:hover #dropcontent {
    display: block;
}
a:hover, #dropdown:hover #dropbtn {
    background-color: cadetblue;
}
#active {background-color: cadetblue}

#head{
    background-color: cadetblue;
    display: flex;
    text-align: center;
    padding-left: 80px;
}

#flexcontainer{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color:azure;
}
#flexcontainer #hit{
    width:50%;
    line-height: 50px;
    padding: 40px;
}
img{
    height:auto;
    display: block;
    margin-left: auto;
    margin-right: auto;

}
#flexcontainer #up{
    width:50%;
    padding: 40px;
    line-height: 50px;
}
#footer{
    display: flex;
    background-color: cadetblue;
    justify-content: center;
    font-size:18px;
    padding: 5px;
}
#hit p{
    padding-left: 40px;
}


/*Designing For Mobile 1st*/
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    #header{
    padding-left: 20px;
    font-size: 10px;
}
#head{
    padding-left: 50px;
    font-size: 10px;
}
#flexcontainer{
    flex-direction: column;
}
#flexcontainer #up{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #hit{
    width:100%;
    text-align: left;
    line-height: 30px;
}
p{
    font-size: 17px;
}

#hit p{
    padding-left: 10px;
}
}
/* Small devices (portrait tablets and large phones, 600px to 900px) */
@media screen and (max-width: 900px) and (min-width: 600px){
    #head{
    font-size: 15px;
}

#flexcontainer{
    flex-direction: column;
}
#flexcontainer #up{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #hit{
    width:100%;
    text-align: center;
    line-height: 30px;
}
p{
    font-size: 17px;
}
}


</style>
<body>
    <div id="header">
        <h1>Solar <span>Security</span> Consult</h1>
    </div>

    <ul id="list">
        <li class="ex1"><a href="./Index.html">Home</a></li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">About Us</a> 
            <div id="dropcontent">
                <a href="./Background.html">Background</a>
                <a href="./Who We Are.html">Who We Are</a>
                <a href="./Our Vision.html">Our Vision</a>
                <a href="./Culture and Values.html">Culture and Values</a>
            </div>
        </li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">Our Services</a>
            <div id="dropcontent">
                <a href="./Services.html">Services</a>
                <a href="./Our Clients.html">Our Clients</a>
                <a href="./Management.html">Management Expertise</a>
            </div>
        </li>
        <li class="ex1"><a id="active" href="./Contact Us.html">Contact Us</a></li>
    </ul><br>

    <div id="head">
            <h1><b>Contact Us</b></h1>
    </div>

    <div id="flexcontainer">
        <div id="hit">
            <p style="font-size:20px;"><b>Telephone:</b> +2348174505899<br>
                <b>Email:</b> info@solarconsult.org<br>
                <b>Corporate Headquarter:</b><br>
                    House 1A,
                    Plot 2,
                    Mike Okiro Close,
                    Metro Command Estate,
                    Wuye,
                    Abuja,
                    Nigeria</p>
        </div>
        <div id="up">
            <img src="./Images/contact-us-2993000_1920.jpg" alt="Contact Us" width="300" height="200">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="form_container">
                <h2>Contact Us</h2> 
                <p> Please send your message below. We will get back to you at the earliest! </p>
                <form role="form" method="post" id="reused_form">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name"> Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="message"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
                        </div>
                    </div>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </div>

    <div id="footer">
            <p>www.Solar Security Consult.com</p>
    </div>
</body>
</html>