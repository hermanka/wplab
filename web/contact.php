<html>
<head>
<title>belajar css</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
    <?php include "menu.php"; ?>
    <section>
    <h1>Contact us</h1>
    <form method="POST">
      <table>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required minlength="2"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
          </tr>      
          <tr>
              <td colspan=2>Komentar</td>
            </tr>  
            <tr>
                <td colspan=2><textarea name="komentar" cols=50 rows=10></textarea></td>
              </tr>
              <tr>
                <td>
                  <input type="submit" value="Kirim">
                </td>
              </tr>
      </table>      
    </form>
    <?php

      if(isset($_POST['nama'])){
        if($_POST['nama']!=null&&strlen($_POST['nama'])>=3){
          echo "Komentar anda telah diterima";
          echo "<br>Nama  : ". htmlspecialchars( $_POST['nama'] );
          echo "<br>Email : ". htmlspecialchars( $_POST['email'] );
          echo "<br>Komentar : <br>". htmlspecialchars( $_POST['komentar'] );
        } else {
          echo "input tidak valid!";
        }
      }
    ?>
</section>
    <?php include "footer.php"; ?>
</body>
</html>