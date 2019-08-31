<!DOCTYPE html>
<html>
<head>
  <title>Sections</title>
</head>
<body>
  <h2>Sections</h2>
  <div class="filter">
    <form action="/action_page.php">
      <div class="form-group">
        <label for="email">Page</label>
        <input type="text" class="form-control" name="page"/>
      </div>
      <div class="form-group">
        <label for="pwd">Query</label>
        <input type="text" class="form-control" name="query"/>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-default" name="submit" class="form-control" value="Filter"/>
      </div>
    </form>
  </div>

  <table class="table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>S1</td>
        <td>T1</td>
        <td>view</td>
      </tr>
      <tr>
        <td>S2</td>
        <td>T1</td>
        <td>view</td>
      </tr>
      <tr>
        <td>S3</td>
        <td>T2</td>
        <td>view</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
