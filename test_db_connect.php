 <html>
 <head>
  <title>Test db PHP</title>
 </head>
 <body>
 <?php 
 	$user = 'user_read';
 	$password = 'read';
 	$db = new PDO('mysql:host=localhost;dbname=TLI', $user, $password);
    foreach($db->query('SELECT * from keywords') as $row) {
    print_r($row);
}
 ?>
 </body>
</html>