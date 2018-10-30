 <html>
    <header>
        <P> DATA INPUT </P>
    </header>
    <nav>
        <a href="classswork.php"></a>
    </nav>
    <section>
        <form action="server.php" method="post" enctype="multipart/form-data">
            <label> FirstName:</label>
            <input type="text" name="firstname" placeholder="firstname" id="name" required/><br>
            <label> Email </label>
            <input type=" email" placeholder="input email" name="email" id="email"/><br>
            <label>About </label>
            <textarea type=" textarea" placeholder="type something" name="about" rows="10" id="about"></textarea> <br>
            <label>Password </label>
            <input type="password" placeholder="password" name="password" required/><br>
            <input type="file" multiple>
            <input type="submit" name="save" value="save">Submit
            <input type="submit" name="login" value="login">Login
        </form>
    </section>
    <article>
        <form method="post" action="" enctype="multipart/form-data">
            <table width="500" border="1" cellpadding="1" cellspacing="1">
                <tr></tr>
               <?php
               $conn = mysqli_connect("127.0.0.1", "root", "", "user");
               $sql="SELECT * FROM class_work";
               $records=mysqli_query($conn,$sql);
               while ($row=mysqli_fetch_array($records,MYSQLI_ASSOC )) {
                   echo "<tr>";

                   echo "<td>" . $row ['Firstname'] . "</td>";
                   echo "<td>" . $row ['Email'] . "</td>";
                   echo "<td>" . $row ['About'] . "</td>";
                   echo "<td>" . $row ['Password'] . "</td>";
                   echo "</tr>";


              } ?>
            </table>

        </form>
    </article>
    <aside>
        <P> <b><u> Showing the data present</u></b> </P>
    </aside>
    <footer>
        <a href="@ peterwathithi8@gmail.com"></a>
        <small> Thankyou for you reading this information posted by Peter Wathithi October 25 </small>
      <aside>
      <img src="images.jpg" at="images.jpg">
      </aside>
        <font color="#dc143c">  <marquee>Intake in progress</marquee></font>

    </footer>
    </html>
<?php
/**INCLUDING SERVER.PHP
*TODO:MAKE OBJECT CHANGES FOR CLASS SERVER
*include ('server.php');
*/
?>
