<html>
    <head>
        <title>Customers</title>
    </head>
    <body>
        <?php
			require_once __DIR__.'/vendor/autoload.php';

			use \DamianTW\FakeCustomerGateway\CustomerGateway;

			$customerGateway = new CustomerGateway();
            $customerArray = $customerGateway->all();
			echo "<table border=1>";
            echo "<tr><th>Name</th><th>Company</th><th>E-mail</th><th>Phone</th></tr>";
			foreach($customerArray as $customer){
				echo "<tr><td>$customer->name</td><td>$customer->company</td><td>$customer->email</td><td>$customer->phone_number</td></tr>";
			}
            echo "</table>";
        ?>
    </body>
</html>