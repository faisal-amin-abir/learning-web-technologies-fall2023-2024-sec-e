<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
    <form action="" method="" enctype="">
      <table border="1" width="20%">
        <tr>
          <td colspan="2">
            <h3 text-align="center">Person Profile</h3>
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" id="name" value="" /><br /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>
            <input type="email" name="email" id="email" value="" />
            <input type="button" value="i" title="hint:xyz@gmail.com" />
            <br />
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" id="male" value="Male" /> Male
            <input type="radio" name="gender" id="female" value="Female" />
            Female
            <input type="radio" name="gender" id="others" value="Others" />
            Others
          </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><input type="date" name="dob" id="dob" value="" /><br /></td>
        </tr>
        <tr>
          <td>Blood Group</td>
          <td>
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
          </td>
        </tr>
        <tr>
          <td>Degree</td>
          <td>
            <input type="checkbox" name="SSC" id="ssc" value="SSC" />SSC
            <input type="checkbox" name="HSC" id="hsc" value="HSC" />HSC
            <input type="checkbox" name="BSC" id="bsc" value="BSC" />BSc
          </td>
        </tr>
        <tr>
          <td>Photo</td>
          <td>
            Picture <input type="file" name="picture" id="picture" value="" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="button" value = "submit" onclick="isValid()"/>
            <input type="reset" name="reset" value="reset" />
          </td>
        </tr>
      </table>
    </form>
    <h5 id="h1"></h5>
    <h5 id="h2"></h5>
    <h5 id="h3"></h5>
    <h5 id="h4"></h5>
    <h5 id="h5"></h5>
    <h5 id="h6"></h5>
    
</body>
</html>