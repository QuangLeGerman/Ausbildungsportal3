<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
<h1 class="homepage1"> <a href="./index.php">homepage</a></h1>
  <h2>Registrierung</h2>
  <form action="/register" method="post">
    <table>
      <tr>
        <td><label for="name">Name:</label></td>

        <td><input type="text" id="name" name="name" required /></td>
      </tr>
      <tr>
        <td><label for="Vorname">Vorname:</label></td>
        <td><input type="text" id="name" name="name" required /></td>
      </tr>
      <tr>
        <td><label for="age">Alter:</label></td>
        <td><input type="number" id="age" name="age" required /></td>
      </tr>
      <tr>
        <td><label for="nationality">Nationalität:</label></td>
        <td>
          <input type="text" id="nationality" name="nationality" required />
        </td>
      </tr>
      <tr>
        <td><label for="gender">Geschlecht:</label></td>
        <td>
          <select id="gender" name="gender" required>
            <option value="">Bitte auswählen</option>
            <option value="männlich">Männlich</option>
            <option value="weiblich">Weiblich</option>
            <option value="divers">Divers</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="email">E-Mail:</label></td>
        <td><input type="email" id="email" name="email" required /></td>
      </tr>
      <tr>
        <td><label for="Telefon">Telefon:</label></td>
        <td><input type="Telefon" id="Telefon" name="Telefon" required /></td>
      </tr>

      <tr>
        <td colspan="2" style="text-align: center">
          <button type="submit">Registrieren</button>
        </td>
      </tr>
    </table>
  </form>

  <body>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6820ac769c7ecf190fb1c97e/1iqvq3cdn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
