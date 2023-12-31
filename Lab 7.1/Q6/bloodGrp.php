<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
    <script src = "bgValid.js"></script>
</head>
<body>
        <fieldset style="width: 25%;">
            <legend>Blood Group</legend>
            <select name="blood" id="blood">
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-+</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <hr> 
            <input type="button" name="submit" value="submit" onclick="isValid()"/>
        </fieldset>
</body>
</html>