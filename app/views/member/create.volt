<div><h1>Add Data</h1></div>

{{ form('member/create', 'method': 'post') }}
  <div class="form-group">
    <label for="Name">Name </label>
    <input type="text" name="name" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="Name">Address </label>
    <input type="text" name="address" class="form-control" id="text">
  </div>
  <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="Name">Phone Number </label>
    <input type="text" name="phonenumber" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="Name">Facebook </label>
    <input type="text" name="facebook" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="Name">Twitter </label>
    <input type="text" name="twitter" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="Name">Google Plus </label>
    <input type="text" name="gplus" class="form-control" id="text">
  </div>
  <button type="submit" class="btn btn-default" value="add">Add</button>
</form>
