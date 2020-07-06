<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
    href= 
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title> Login Page</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-eqiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
</head>
<style>
    h1 {
  border-style: outset;
  border-width: 7px;
  border-top-color: white;
  border-left-color: white;
  width: 400px;
  height: 500px;
  margin:0.3px;
  padding: 5px ;
  border-radius:9px;}
div {
  border-style: outset;
  border-radius:9px;
  border-width: 7px;
  border-top-color: white;
  border-left-color: white;
  border-bottom-right-radius: 6px;
  border-right-color: black;
  border-bottom-color: black;
  width: 400px;
  height: 500px;
  
  }
    body {
  background-color: white;
  color: white;
  font-size: 1.1em;
  font-family: 'Palatino Linotype';
   }
   .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0.5px;
  }
.button1{
    background-color:#00BFFF;
     border-radius:6px;
     padding: 5px 75px;
     font-size:20px;
  }
.button2{
    background-color:#4169E1;
     border-radius:6px;
     padding: 5px 100px;
     font-size:20px;
        margin: 0.5px;
 }
.button3{
    background-color:#DC143C;
     border-radius:6px;
     padding: 5px 100px;
     font-size:20px;
     margin: 0.5px;
  }
.button4{
    background-color:#9ACD32;
     border-radius:6px;
     padding: 5px 50px;
     font-size:16px;
     margin: 0.5px;
}  
/*line*/
h2 {
    font-family: 20px Palatino Linotype;
    margin-top: 20px;
    position: relative;
    text-align: center;
        z-index: 1;
    color: grey;
}

h2:before {

    border-top: 2px solid grey;
    content:"";
    margin: 0 auto; 
    position: absolute; 
    top: 15px; left: 0; right: 0; bottom: 0;
    width: 65%;
    z-index: -1;
    color: light gray;
}

h2 span { 
    color: light grey;
    background: #fff; 
    padding: 0 10px; 
}
/*input box icon*/
h2 {
    font-family: 20px Palatino Linotype;
    margin-top: 30px;
    position: relative;
    text-align: center;
    z-index: 1;
    text-emphasis-color: #888888;
    }  /*icon in text box*/
    #textfeild1{
    background-image:url('C:/images/mailsymbol'); 
    position : right;
    padding-left: 30px;
    background-size: 15px;
    border-radius: 4px;
     height:25px;
    margin:4px;
    }
    #textfeild2{
    background-image:url('C:/images/padlock'); 
    position:right;
    padding-left:30px;
    background-size:15px;
    border-radius:4px;
    height:25px;
    margin:4px;
    }
    i {
        color: var(--icon_color);
    }

</style>
<body>
    <form method="post" action="loginsuccessful.php ">
    <hr/>
   <br/><br/>  <center>  <div class="h1"><center>
<p style="background-color:blue;font-size:20px;">Sign in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <input id="textfeild1" type="text" class="form-control" placeholder="mail@example.com" />
   <input id="textfeild2" type="password" class="form-control" name="password" placeholder="Password"><br/>
<input type="submit" class="button button1" name="sign in" value="sign in"></a>
 <h6>
     <p style="color: black;">
     Forgot your password?&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>Register!</a>
    </h6></p>
 <h2>   
     <span>
         OR
        </span>
</h2>
<a href="https://www.facebook.com/" class="button button2">fb</a> <br/><br/>
<a href="https://www.google.com/" class="button button3">g</a> <br/><br/>
<a href="https://login.epam.com/adfs/ls/idpinitiatedsignon/" class="button button4">&#x3c;EPAM LOGIN &#x3e;</a><br/><br/>
</center></div>
</center>
</form>
</body>
</html>
