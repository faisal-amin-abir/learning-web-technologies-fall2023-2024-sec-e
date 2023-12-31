<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
    <script src = "ppValid.js"></script>
</head>
<body>
    <fieldset style="width: 25%">
        <legend>Profile Picture</legend>
        User Id <input type="text" name="userId" id="userId" value="" /> <br />
        Picture <input type="file" name="picture" id="picture" value="" />
        <hr />
        <input value = "Submit" type="button" onclick="isValid()"/>
    </fieldset>
</body>
</html>