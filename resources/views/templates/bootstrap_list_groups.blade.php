<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Active Item in a List Group</h2>
  <ul class="list-group">
    <li class="list-group-item active">Active item</li>
    <li class="list-group-item">Second item</li>
    <li class="list-group-item">Third item</li>
  </ul>
</div>


<div class="container">
  <h2>Flush / Remove Borders</h2>
  <p>Use the .list-group-flush class to remove some borders and rounded corners:</p>
</div>

<div class="container">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">First item</li>
    <li class="list-group-item">Second item</li>
    <li class="list-group-item">Third item</li>
    <li class="list-group-item">Fourth item</li>
  </ul>
</div>

<div class="container mt-3">
  <h2>List Group With Badges</h2>
  <p>Combine .badge classes with utility/helper classes to add badges inside the list group:</p>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Inbox
      <span class="badge badge-primary badge-pill">12</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Ads
      <span class="badge badge-primary badge-pill">50</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Junk
      <span class="badge badge-primary badge-pill">99</span>
    </li>
  </ul>
</div>

</body>
</html>
