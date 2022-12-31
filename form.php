<!DOCTYPE html>
<html>
    <head>
        <title>Trip registration form for college IV</title>
        
    </head>
    <body>
        
        <h2 style="text-align: center"> Registration form for College IV Trip </h2>
        <div class = "alert alert-warning">
        <form action="server.php" method="POST">
            <fieldset>
                <legend>Student information</legend>
            <h3>Enter the following details to register </h3>
            <label for="username"> Enter Your Full Name : <br></label>
                <input type="text" id="username" name="username" required autofocus placeholder=" eg; Rhea Gomez"/> <br><br>
            <label for="branch"> Branch :</label>
                <input type="text" id="branch" name="branch" required placeholder="eg; I.T." /> <br> <br> 
            <label for="Semester"> Semester : <br></label>
                <input type="radio" id="Semester" name="Sem" value="1"> I
                <input type="radio" id="Semester" name="Sem" value="3"> III 
                <input type="radio" id="Semester" name="Sem" value="5"> V
                <input type="radio" id="Semester" name="Sem" value="7"> VII   <br><br>
            <label for="rollno"> Enter Your Roll Number : <br></label>
                <input type="text" name="rollno" id="rollno" required placeholder="eg; 5021117"/> <br><br>
            <label for="phoneno">Phone number: <br></label>
                <input type="tel" id="phoneno" name="phoneno" required placeholder="eg; 9867294229" /> <br><br>
            <label for="email"> Email Id : <br></label>
                <input type="email" id="email" name="email" required placeholder="eg; example@gmail.com"/><br><br>
            <button type="submit" name="submit">Submit</button>
            <input type="reset" name="reset" id="reset" value="reset"/>    
        </fieldset>
        </form>
       </div>
    </body>
</html>