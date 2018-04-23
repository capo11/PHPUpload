<html>
    <head>
        
    </head>
    <body>
       <form enctype="multipart/form-data" name = "modulo_ftp" action="helper.php" method="POST">
              <table>
                  <tr><td>Server FTP</td><td><input type="text" name="ftp_server" value="ftp_server"/></td></tr>
                  <tr><td>Porta</td><td><input type="text" name="port" value="21"/></td></tr>
                  <tr><td>Username</td><td><input type="text" name="username" value="username"/></td></tr>
                  <tr><td>Password</td><td><input type="password" name="password" value="password"/></td></tr>
                  <tr><td>File</td><td><input type="file" name="file"/></td></tr>
                  <tr><td><input type="submit" name="send_file" value="Carica file"/></td>
              </table> 
        </form>
    </body>
</html>
