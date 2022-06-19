<!--<html>-->
<!--<body>-->
<!---->
<!--<form method="post">-->
<!--    New Visibility: <input type="text" id="visibility" name="visibility"><br>-->
<!--    New Password: <input type="text" id="password" name="password"><br>-->
<!--    New Duration: <input type="text" id="duration" name="duration"><br>-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->
<style>
html {
height: 100%;
}

body {
align-items: center;
background-color: #005226;
display: flex;
height: 100%;
justify-content: center;
margin: 0px;
padding: 0px;
}

.auth-email-wrapper {
align-items: center;
background-color: white;
border-radius: 35px;
display: flex;
flex-direction: column;
font-family: 'Roboto Mono Light', monospace;
font-size: 150%;
height: 600px;
justify-content: center;
min-width: 350px;
text-align: center;
width: 60%;
}

.auth-token-wrapper {
align-items: center;
background-color: white;
border-radius: 35px;
display: flex;
flex-direction: column;
font-family: 'Roboto Mono Light', monospace;
font-size: 150%;
height: 650px;
justify-content: center;
min-width: 350px;
text-align: center;
width: 60%;
}

.auth-form {
align-items: center;
display: flex;
flex-direction: column;
}

.logo {
margin-bottom: 60px;
min-width: 130px;
width: 20%;
}

.input-wrapper {
position: relative;
}

.input-label {
font-size: 25px;
margin: 0px 100px;
}

.input-icon {
height: 25px;
left: 11%;
position: absolute;
top: 45px;
width: 25px;
z-index: 10000000000;
}

.input {
border-radius: 10px;
border: 2px solid black;
font-size: 25px;
height: 35px;
margin: 35px 0% 45px 0%;
padding: 5px 10px 5px 50px !important;
width: 70% !important;
}

.invalid-data {
color: red;
margin-bottom: 40px;
}

.auth-button:hover {
box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}

.auth-button {
border-radius: 30px;
}

.continue-button {
background-color: #005226;
border: #005226 2px solid;
color: white;
font-family: inherit;
font-size: 100%;
padding: 2% 8%;
width: fit-content;
}

.auth-token-button-wrapper {
display: flex;
justify-content: space-evenly;
width: 80%;
}

.submit-button {
background-color: #005226;
border-radius: 30px;
border: #005226 2px solid;
color: white;
font-family: inherit;
font-size: 25px;
min-width: 100px;
padding: 10px 0%;
width: 180px;
}

.back-button {
background-color: lightgray;
border-radius: 30px;
border: lightgray 2px solid;
color: white;
font-family: inherit;
font-size: 25px;
max-height: min-content;
min-width: 100px;
padding: 10px 0%;
width: 180px;
}

@media screen and (max-width: 500px) {

.back-button,
.submit-button {
font-size: 20px;
width: 135px;
}

.invalid-data {
margin-bottom: 35px;
font-size: 20px;
}

.continue-button {
font-size: 20px;
}

.auth-token-button-wrapper {
width: 90%;
}

.input-label {
font-size: 21px;
margin: 0px 25px;
}

.logo {
margin-bottom: 50px;
}
}
</style>

<div class="auth-email-wrapper">
    <form class="auth-form" action="" method="post">
        <div class="input-label">
            <label for="input-wrapper" id="auth-label">enter your changes below</label>
        </div>
        <div class="input-wrapper">
            Visibility: <input type="text" class="input" id="visibility" name="visibility">
            Password: <input type="text" class="input" id="password" name="password"><br>
            Duration: <input type="text" class="input" id="duration" name="duration">
        </div>
        <button type="submit" id="auth-continue" class="continue-button auth-button">continue</button>
    </form>
</div>