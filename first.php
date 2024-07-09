<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form id="myForm" onSubmit="return validation()">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="number">Number:</label><br>
        <input type="text" id="number" name="number"><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="submit" value="Submit">
    </form>

    <script>
        function validation(){
            //name validation
            let name = document.getElementById("name").value;
            if(name==""){
                alert("Enter valid Name");
                return false;
            }

            let condition = /^[A-Z a-z]+$/;
            let result = name.match(condition);
            if (result==null){
                alert("Name format not valid");
                return false;
            }

            //Numbers Validation
            let number = document.getElementById("number").value;
            if(number == ""){
                alert("Enter number");
                return false;
            }
            else if(isNaN(number)){
                alert("Entered value is not a number");
                return false;
            }

            //Radio Validation
            let male = document.getElementById("male").checked;
            let female = document.getElementById("female").checked;
            if(male == false && female == false){
                alert("Gender needs to be selected");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>