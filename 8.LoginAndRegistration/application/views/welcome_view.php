<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="/assets/css/master.css">
	</head>
	<body>
		<div class="wrapper">
      <div class="header">
        <p>Welcome <?=$record['first_name'] ?></p>
        <div class="logoff">
          <a href="/">Logoff</a>
        </div>
      </div>
			<div class="user_info">
				<p class="borderline">User Information</p>
        <p>
          First Name: <?=$record['first_name'] ?>
        </p>
        <p>
          Last Name: <?=$record['last_name'] ?>
        </p>
        <p>
          Email Address: <?=$record['email'] ?>
        </p>
			</div>

		</div>

	</body>
</html>
